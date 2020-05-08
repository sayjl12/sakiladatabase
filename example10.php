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
    $query="UPDATE inventory SET film_id='" . $input['film_id'] . "', store_id='" . $input['store_id'] . "'  WHERE inventory_id='" . $input['inventory_id'] . "';";
	$query .= "UPDATE inventory SET last_update='$date' WHERE inventory_id IS NOT NULL";
	mysqli_multi_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM inventory WHERE inventory_id='" . $input['inventory_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>