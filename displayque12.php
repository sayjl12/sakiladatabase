<html>
<form action="search12.php" method="post">
	<label for="svalue">Search for:</label>
	<select class="svalue" name="svalue">
	<option value="payid">Payment ID</option>
	<option value="cusid">Customer ID</option>
	<option value="staffid"> Staff ID</option>
	<option value="rentalid"> Rental ID</option>
	<option value="amt"> Amount</option>
	<option value="paydate"> Payment Date</option>
	</select>
	<input id="textinput" name="textinput" type="text">
	<input type="submit" class="w3-button w3-black" id="search" href="#" value="Go">
</form>

<div class="w3-row-padding w3-padding-16">
	<button class="w3-button w3-black " href="#" onclick="document.getElementById('insert').style.display='block'">Insert New Data</button>
</div>
<form action="insert12.php" method="post">
<div id="insert" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('insert').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-bookmark w3-margin-right"></i>Insert New Data</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-id-card"></i> Payment ID</label></p>
        <input class="w3-input w3-border" type="text" name="payid" placeholder="Enter New ID">
        <p><label><i class="fa fa-user"></i> Customer ID</label></p>
        <input class="w3-input w3-border" type="text" name="cusid" placeholder="Enter First Name">
		<p><label><i class="fa fa-user"></i> Staff ID</label></p>
        <input class="w3-input w3-border" type="text" name="staffid" placeholder="Enter Last Name">
		<p><label><i class="fa fa-user"></i> Rental ID</label></p>
        <input class="w3-input w3-border" type="text" name="rentalid" placeholder="Enter Last Name">
		<p><label><i class="fa fa-user"></i> Amount</label></p>
        <input class="w3-input w3-border" type="text" name="amt" placeholder="Enter Last Name">
		<p><label><i class="fa fa-user"></i> Payment Date</label></p>
        <input class="w3-input w3-border" type="text" name="paydate" placeholder="Enter Last Name">
		<input type="submit" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right" value="Submit">
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('insert').style.display='none'">Close <i class="fa fa-remove"></i></button>
      </div>
    </div>
</div>
</form>

</html>