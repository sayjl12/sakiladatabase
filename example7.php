<?php

date_default_timezone_set("Asia/Kuala_Lumpur");
$date=date('Y-m-d H:i:s');
header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

$conn = new mysqli('localhost', 'root', '', 'sakila');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

if ($input['action'] === 'edit') {
    $query="UPDATE film_actor SET film_id='" . $input['film_id'] . "' WHERE actor_id='" . $input['actor_id'] . "';";
	$query .= "UPDATE film_actor SET last_update='$date' WHERE actor_id IS NOT NULL";
	mysqli_multi_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM film_actor WHERE actor_id='" . $input['actor_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>