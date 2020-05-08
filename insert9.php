<html>
<style>
div.w3-container{
	left: 250px;
	top: 20px;
	bottom: 20px;
	position: absolute;	
	right: 250px;
}
div.showsf{
	left: 250px;
	position :absolute;
	right:250px;
}
div.back{
	top: 250px;
	position: absolute;
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-container w3-content w3-container menu w3-padding-48 w3-card" style="max-width:700px">
<div class="showsf">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	 die("Connection failed: ".$conn->connect_error);
}else {
	$sql = "INSERT INTO film_text (film_id, film_title, film_description) VALUES ('".$_POST["filmid"]."','".$_POST["filmt"]."', '".$_POST["filmd"]."');";
	if($conn->query($sql)){
		echo "Inserted Successfully";
	}else {
		echo "Error: ".$conn->error;
	}
	
}
$conn->close();
?>
</div>
<div class="back">
<form action="mainpage1.php" method="post">
<input type="submit" class="w3-button w3-black "  href="#" value="Back">
</form>
</div>
</div>
</html>