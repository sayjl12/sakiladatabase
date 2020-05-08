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
    $query="UPDATE address SET address='" . $input['address'] . "', address2='" . $input['address2'] . "', district='" . $input['district'] . "', city_id='" . $input['city_id'] . "', postal_code='" . $input['postal_code'] . "', phone='" . $input['phone'] . "'  WHERE address_id='" . $input['address_id'] . "';";
	$query .= "UPDATE address SET last_update='$date' WHERE address_id IS NOT NULL";
	mysqli_multi_query($conn,$query);
}
if ($input['action'] === 'delete')
{
	$query = "DELETE FROM address WHERE address_id='" . $input['address_id'] . "'";
	$result=mysqli_query($conn, $query);
	
	if(!$result){
		echo"Failed";
	}
}
mysqli_close($conn);

echo json_encode($input);
?>