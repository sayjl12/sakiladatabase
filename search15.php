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
	case 'storeid':
		$sql = "SELECT * FROM store WHERE store_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'managerid':
		$sql = "SELECT * FROM store WHERE manager_staff_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'addid':
		$sql = "SELECT * FROM store WHERE address_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
}
echo "
	<div class='container'>
	<table id='edittable' class='table table-striped table-bordered' width=100%>
	<tr>
		<th> Store ID </th>
		<th> Manager Staff ID </th>
		<th> Address ID </th>
		<th> Last Update </th>
	</tr>
	";
	
if($result){
	while($row = $result->fetch_assoc())
	{
		echo "
		<tr>
		<td>$row[store_id]</td>
		<td>$row[manager_staff_id]</td>
		<td>$row[address_id]</td>
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
	url:'example15.php',
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
		identifier:[0,'store_id'],
		editable:[[1,'manager_staff_id'],[2,'address_id']]
	},
	restoreButton:false,
	onSuccess:function(data, textStatus, jqXHR)
	{
		if((data.action == 'delete'))
		{
			$('#'+data.store_id).remove();
		}
	},
});
});
</script>