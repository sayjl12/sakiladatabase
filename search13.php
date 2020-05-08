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
	case 'rentalid':
		$sql = "SELECT * FROM rental WHERE rental_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'rentaldate':
		$sql = "SELECT * FROM rental WHERE rental_date LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'inid':
		$sql = "SELECT * FROM rental WHERE inventory_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'cusid':
		$sql = "SELECT * FROM rental WHERE customer_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'returndate':
		$sql = "SELECT * FROM rental WHERE return_date LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'staffid':
		$sql = "SELECT * FROM rental WHERE staff_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
}

echo "
	<div class='container'>
	<table id='edittable' class='table table-responsive table-striped table-bordered' width=100%>
	<tr>
		<th> Rental ID </th>
		<th> Rental Date </th>
		<th> Inventory ID </th>
		<th> Customer ID </th>
		<th> Return Date </th>
		<th> Staff ID </th>
		<th> Last Update </th>
	</tr>
	";
	
if($result){
	while($row = $result->fetch_assoc())
	{
		echo "
		<tr>
		<td>$row[rental_id]</td>
		<td>$row[rental_date]</td>
		<td>$row[inventory_id]</td>
		<td>$row[customer_id]</td>
		<td>$row[return_date]</td>
		<td>$row[staff_id]</td>
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
</html>
<script>
$(document).ready(function(){
$('#edittable').Tabledit({
	url:'example13.php',
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
		identifier:[0,'rental_id'],
		editable:[[1,'rental_date'],[2,'inventory_id'],[3,'customer_id'],[4,'return_date'],[5,'staff_id']]
	},
	restoreButton:false,
	onSuccess:function(data, textStatus, jqXHR)
	{
		if((data.action == 'delete'))
		{
			$('#'+data.rental_id).remove();
		}
	},
});
});
</script>