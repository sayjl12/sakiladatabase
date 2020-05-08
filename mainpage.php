<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
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
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">SAKILA</a>
    
  </div>
</div>


<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="View Tables">View Tables <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
  <a class="w3-bar-item w3-button w3-hover-black" href="#" >Actor</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Address</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Category</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">City</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Country</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Customer</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Film</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Film_actor</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Film_category</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Fim_text</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Inventory</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Language</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Payment</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Rental</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Staff</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#">Store</a>
</div>
</div>
</nav>

</body>
</html>

