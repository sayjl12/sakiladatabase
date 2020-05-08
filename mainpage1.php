<!DOCTYPE html>
<html>

<title>Sakila Database</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
div#displaydata{
	top: 150px;
	left: 255px;
	position: absolute;
	width: 1000px;
	overflow-x: auto;
}
div#query{
	top: 50px;
	left: 300px;
	position: absolute;
}

</style>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js">
</script>
</head>

<body>
<?php include('ajax.js');?>

<form method = "post">

<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-white w3-large w3-theme-l1"  onclick="#viewbtn"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">SAKILA</a>
    
  </div>
</div>

<nav class="w3-sidebar w3-bar-block  w3-large w3-theme-l5 w3-animate-left" id="mySidebar">

	<div class="w3-dropdown-hover w3-hide-small">
		<button class="w3-padding-large w3-button" id="viewbtn" title="View Tables">View Tables <i class="fa fa-caret-down"></i></button>
		<div class="w3-dropdown-content w3-bar-block w3-card-4">
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="actorbtn">Actor</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="addbtn">Address</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="categorybtn">Category</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="citybtn">City</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="countrybtn">Country</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="customerbtn">Customer</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="filmbtn">Film</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="filmacbtn">Film_actor</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="filmcatbtn">Film_category</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="filmtbtn">Film_text</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="inbtn">Inventory</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="lanbtn">Language</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="paybtn">Payment</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="rentalbtn">Rental</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="staffbtn">Staff</a>
			<a class="w3-bar-item w3-button w3-hover-black" href="#" id="storebtn">Store</a>
		</div>
	</div>
</nav>
</form>

<div id="query">
    <p id="displayque"></p>
</div>

<div id="displaydata">
	<p id="messagedisplay"></p>
</div>

</body>
</html>