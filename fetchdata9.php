<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="jquery.tabledit.min.js"></script>
<script src="jquery.tabledit.js"></script>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}else{

$sql = "SELECT * FROM film_text ORDER BY film_id + 0";
$result = $conn->query($sql);

echo "
	<div class='container'>
	<table id='edittable' class='table table-striped table-bordered' width=100%>
	<tr>
		<th> Film ID </th>
		<th> Film Title </th>
		<th> Film Description </th>
	</tr>
	";
	
if($result){
	while($row = $result->fetch_assoc())
	{
		echo "
		<tr>
		<td>$row[film_id]</td>
		<td>$row[film_title]</td>
		<td>$row[film_description]</td>
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
	url:'example9.php',
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
		identifier:[0,'film_id'],
		editable:[[1,'film_title'],[2,'film_description']]
	},
	restoreButton:false,
	onSuccess:function(data, textStatus, jqXHR)
	{
		if((data.action == 'delete'))
		{
			$('#'+data.film_id).remove();
		}
	},
});
});
</script>