<?php
header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

$conn = new mysqli('localhost', 'root', '', 'sakila');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

if ($input['action'] === 'edit') {
    $query="UPDATE film_text SET film_title='" . $input['film_title'] . "', film_description='" . $input['film_description'] . "'  WHERE film_id='" . $input['film_id'] . "';";
	mysqli_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM film_text WHERE film_id='" . $input['film_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>