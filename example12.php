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
    $query="UPDATE payment SET customer_id='" . $input['customer_id'] . "', staff_id='" . $input['staff_id'] . "', rental_id='" . $input['rental_id'] . "', amount='" . $input['amount'] . "', payment_date='" . $input['payment_date'] . "' WHERE payment_id='" . $input['payment_id'] . "';";
	$query .= "UPDATE payment SET last_update='$date' WHERE payment_id IS NOT NULL";
	mysqli_multi_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM payment WHERE payment_id='" . $input['payment_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>