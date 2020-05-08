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
	case 'filmid':
		$sql = "SELECT * FROM film WHERE film_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'filmt':
		$sql = "SELECT * FROM film WHERE film_title LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'filmd':
		$sql = "SELECT * FROM film WHERE film_description LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'ryear':
		$sql = "SELECT * FROM film WHERE release_year LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'langid':
		$sql = "SELECT * FROM film WHERE language_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'original_language_id':
		$sql = "SELECT * FROM film WHERE original_language_id LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'rentaldura':
		$sql = "SELECT * FROM film WHERE rental_duration LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'rentalrate':
		$sql = "SELECT * FROM film WHERE rental_rate LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'length':
		$sql = "SELECT * FROM film WHERE length LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'cost':
		$sql = "SELECT * FROM film WHERE replacement_cost LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'rating':
		$sql = "SELECT * FROM film WHERE rating LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;
	case 'feature':
		$sql = "SELECT * FROM film WHERE special_features LIKE '%{$textinput}%'";
		$result = $conn->query($sql);
	break;

}

echo "
	<div class='container'>
	<table id='edittable' class='table table-striped table-bordered' width=100%>
	<tr>
		<th> Film ID </th>
		<th> Film Title </th>
		<th> Film Description </th>
		<th> Release Year </th>
		<th> Language ID </th>
		<th> Original Language ID </th>
		<th> Rental Duration </th>
		<th> Rental Rate </th>
		<th> Length </th>
		<th> Replacement Cost </th>
		<th> Rating </th>
		<th> Special Features </th>
		<th> Last Update </th>
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
		<td>$row[release_year]</td>
		<td>$row[language_id]</td>
		<td>$row[original_language_id]</td>
		<td>$row[rental_duration]</td>
		<td>$row[rental_rate]</td>
		<td>$row[length]</td>
		<td>$row[replacement_cost]</td>
		<td>$row[rating]</td>
		<td>$row[special_features]</td>
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
	url:'example6.php',
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
		editable:[[1,'film_title'],[2,'film_description'],[3,'release_year'],[4,'language_id'],[5,'original_language_id'],[6,'rental_duration'],[7,'rental_rate'],[8,'length'],[9,'replacement_cost'],[10,'rating'],[11,'special_features']]
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