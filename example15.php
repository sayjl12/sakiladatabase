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
    $query="UPDATE store SET manager_staff_id='" . $input['manager_staff_id'] . "', address_id='" . $input['address_id'] . "'  WHERE store_id='" . $input['store_id'] . "';";
	$query .= "UPDATE store SET last_update='$date' WHERE store_id IS NOT NULL";
	mysqli_multi_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM store WHERE store_id='" . $input['store_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>