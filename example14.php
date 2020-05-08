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
    $query="UPDATE staff SET first_name='" . $input['first_name'] . "', last_name='" . $input['last_name'] . "',address_id='" . $input['address_id'] . "',email='" . $input['email'] . "',store_id='" . $input['store_id'] . "',active='" . $input['active'] . "',username='" . $input['username'] . "',password='" . $input['password'] . "'  WHERE staff_id='" . $input['staff_id'] . "';";
	$query .= "UPDATE staff SET last_update='$date' WHERE staff_id IS NOT NULL";
	mysqli_multi_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM staff WHERE staff_id='" . $input['staff_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>