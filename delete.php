<html>
<style>

</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="back">
<form action="mainpage1.php" method="post">
<input type="submit" class="w3-button w3-black "  href="#" value="Back"></form>
</div>
<div class="w3-container w3-content w3-container menu w3-padding-48 w3-card" style="max-width:700px">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$id = $_GET['id'];
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
else{
	$sql = "DELETE FROM actor WHERE actor_id=".$id; 
	$result = $conn->query($sql);
	
	if($result) {
		$conn->close();
		header('Location: mainpage1.php');
		die;
	}else{
		echo "Error deleting record: ".$conn->error;
		
			}
		
}
?>
</div>
</html>