<html>
<form action="search1.php" method="post">
	<label for="svalue">Search for:</label>
	<select class="svalue" name="svalue">
	<option value="addid">Address ID</option>
	<option value="address">Address</option>
	<option value="address2">Address2</option>
	<option value="district">District</option>
	<option value="cityid">City ID</option>
	<option value="postalcode">Postal Code</option>
	<option value="phonenumber">Phone Number</option>
	</select>
	<input id="textinput" name="textinput" type="text">
	<input type="submit" class="w3-button w3-black" id="search" href="#" value="Go">
</form>

<div class="w3-row-padding w3-padding-16">
	<button class="w3-button w3-black " href="#" onclick="document.getElementById('insert').style.display='block'">Insert New Data</button>
</div>
<form action="insert1.php" method="post">
<div id="insert" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('insert').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-bookmark w3-margin-right"></i>Insert New Data</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-id-card"></i> Address ID</label></p>
        <input class="w3-input w3-border" type="text" name="addid" placeholder="Enter New ID">
        <p><label><i class="fa fa-user"></i> Address</label></p>
        <input class="w3-input w3-border" type="text" name="address" placeholder="Enter First Name">
		<p><label><i class="fa fa-user"></i> Address2</label></p>
        <input class="w3-input w3-border" type="text" name="add2" placeholder="Enter Last Name">
		<p><label><i class="fa fa-user"></i> District</label></p>
        <input class="w3-input w3-border" type="text" name="district" placeholder="Enter Last Name">
		<p><label><i class="fa fa-user"></i> City ID</label></p>
        <input class="w3-input w3-border" type="text" name="cityid" placeholder="Enter Last Name">
		<p><label><i class="fa fa-user"></i> Postal Code</label></p>
        <input class="w3-input w3-border" type="text" name="postal" placeholder="Enter Last Name">
		<p><label><i class="fa fa-user"></i> Phone Number</label></p>
        <input class="w3-input w3-border" type="text" name="phone" placeholder="Enter Last Name">
        <input type="submit" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right" value="Submit">
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('insert').style.display='none'">Close <i class="fa fa-remove"></i></button>
      </div>
    </div>
</div>
</form>

</html>