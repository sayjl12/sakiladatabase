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
	case 'payid':
		$sql = "SELECT * FROM payment WHERE payment_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'cusid':
		$sql = "SELECT * FROM payment WHERE customer_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'staffid':
		$sql = "SELECT * FROM payment WHERE staff_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'rentalid':
		$sql = "SELECT * FROM payment WHERE rental_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'amt':
		$sql = "SELECT * FROM payment WHERE amount LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'paydate':
		$sql = "SELECT * FROM payment WHERE payment_date LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
}

echo "
	<div class='container'>
	<table id='edittable' class='table table-striped table-bordered' width=100%>
	<tr>
		<th> Payment ID </th>
		<th> Customer ID </th>
		<th> Staff ID </th>
		<th> Rental ID </th>
		<th> Amount </th>
		<th> Payment Date </th>
		<th> Last Update </th>
	</tr>
	";
	
if($result){
	while($row = $result->fetch_assoc())
	{
		echo "
		<tr>
		<td>$row[payment_id]</td>
		<td>$row[customer_id]</td>
		<td>$row[staff_id]</td>
		<td>$row[rental_id]</td>
		<td>$row[amount]</td>
		<td>$row[payment_date]</td>
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
	url:'example12.php',
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
		identifier:[0,'payment_id'],
		editable:[[1,'customer_id'],[2,'staff_id'],[3,'rental_id'],[4,'amount'],[5,'payment_date']]
	},
	restoreButton:false,
	onSuccess:function(data, textStatus, jqXHR)
	{
		if((data.action == 'delete'))
		{
			$('#'+data.payment_id).remove();
		}
	},
});
});
</script>