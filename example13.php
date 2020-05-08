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
    $query="UPDATE rental SET rental_date='" . $input['rental_date'] . "', inventory_id='" . $input['inventory_id'] . "',customer_id='" . $input['customer_id'] . "',return_date='" . $input['return_date'] . "',staff_id='" . $input['staff_id'] . "'  WHERE rental_id='" . $input['rental_id'] . "';";
	$query .= "UPDATE rental SET last_update='$date' WHERE rental_id IS NOT NULL";
	mysqli_multi_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM rental WHERE rental_id='" . $input['rental_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>