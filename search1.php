<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="jquery.tabledit.min.js"></script>
<script src="jquery.tabledit.js"></script>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<div class="back">
<form action="mainpage1.php" method="post">
<input type="submit" class="w3-button w3-black "  href="#" value="Back">
</form>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = new mysqli($servername, $username, $password, $dbname);

$svalue = $_POST['svalue'];
$textinput = $_POST['textinput'];

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}else{

switch($svalue){
	case 'addid':
		$sql = "SELECT * FROM address WHERE address_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'address':
		$sql = "SELECT * FROM address WHERE address LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'address2':
		$sql = "SELECT * FROM address WHERE address2 LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'district':
		$sql = "SELECT * FROM address WHERE district LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'cityid':
		$sql = "SELECT * FROM address WHERE city_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'postalcode':
		$sql = "SELECT * FROM address WHERE postal_code LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'phonenumber':
		$sql = "SELECT * FROM address WHERE phone LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
}

echo "
	<div class='container'>
	<table id='edittable' class='table table-striped table-bordered' width=100%>
	<tr>
		<th> Address ID </th>
		<th> Address </th>
		<th> Address2 </th>
		<th> District </th>
		<th> City ID </th>
		<th> Postal Code </th>
		<th> Phone Number </th>
		<th> Last Update </th>
	</tr>
	";
	
if($result){
	while($row = $result->fetch_assoc())
	{
		echo "
		<tr>
		<td>$row[address_id]</td>
		<td>$row[address]</td>
		<td>$row[address2]</td>
		<td>$row[district]</td>
		<td>$row[city_id]</td>
		<td>$row[postal_code]</td>
		<td>$row[phone]</td>
		<td>$row[last_update]</td>
		</tr>
		";
	}
}
else{
	echo "No Record Found";
}
echo "</table>";
echo "</div>";
}
$conn->close();
?>
<html>
<script>
$(document).ready(function(){
$('#edittable').Tabledit({
	url:'example1.php',
	saveButton: false,
	buttons:{
		edit:{
			class: 'btn btn-sm btn-primary',
			html: '<span class="glyphicon glyphicon-pencil"></span>  &nbsp EDIT',
			action: 'edit'
		},
		delete:{
			class: 'btn btn-sm btn-danger',
			html: '<span class="glyphicon glyphicon-trash"></span> &nbsp DELETE',
			action: 'delete'
		}
	},
	columns:{
		identifier:[0,'address_id'],
		editable:[[1,'address'],[2,'address2'],[3,'district'],[4,'city_id'],[5,'postal_code'],[6,'phone']]
	},
	restoreButton:false,
	onSuccess:function(data, textStatus, jqXHR)
	{
		if((data.action == 'delete'))
		{
			$('#'+data.address_id).remove();
		}
	}
});
});
</script>