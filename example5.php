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
    $query="UPDATE customer SET store_id='" . $input['store_id'] . "', first_name='" . $input['first_name'] . "', last_name='" . $input['last_name'] . "', email='" . $input['email'] . "', address_id='" . $input['address_id'] . "', active='" . $input['active'] . "',create_date='" . $input['create_date'] . "'  WHERE customer_id='" . $input['customer_id'] . "';";
	$query .= "UPDATE customer SET last_update='$date' WHERE customer_id IS NOT NULL";
	mysqli_multi_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM customer WHERE customer_id='" . $input['customer_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>