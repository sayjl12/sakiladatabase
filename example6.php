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
    $query="UPDATE film SET film_title='" . $input['film_title'] . "', film_description='" . $input['film_description'] . "', release_year='" . $input['release_year'] . "', language_id='" . $input['language_id'] . "', original_language_id='" . $input['original_language_id'] . "', rental_duration='" . $input['rental_duration'] . "',rental_rate='" . $input['rental_rate'] . "',length='" . $input['length'] . "',replacement_cost='" . $input['replacement_cost'] . "',rating='" . $input['rating'] . "',special_features='" . $input['special_features'] . "'  WHERE film_id='" . $input['film_id'] . "';";
	$query .= "UPDATE film SET last_update='$date' WHERE film_id IS NOT NULL";
	mysqli_multi_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM film WHERE film_id='" . $input['film_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>