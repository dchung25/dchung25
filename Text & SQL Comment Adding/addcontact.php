<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
        Add Contact
</title>
<link rel="stylesheet" type="text/css" href="lab3.css">
<body>
<div class="container">
    <?php
    include('navi.php');
    ?>
<div class="mainbox">
    <?php
    include('header.php');
    ?>
<div class="maincontent"> 
<h1> New Contact Entry</h1> <br/>
<form action="checkUpdate.php" method="post">
First Name <input type = "text" name = "fname" center>
Last Name <input type = "text" name = "lname" center> <br/> <br/>
Email Address <input type = "text" name = "email" center> <br/><br/>
Phone Number <input type = "text" name = "phone" center> <br/><br/>
Address <input type = "text" name = "address" center>
City <input type = "text" name = "city" center> <br/><br/>
State: <select name="state">
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DE">Delaware</option>
		<option value="DC">District Of Columbia</option>
		<option value="FL">Florida</option>
		<option value="GA">Georgia</option>
		<option value="HI">Hawaii</option>
		<option value="ID">Idaho</option>
		<option value="IL">Illinois</option>
		<option value="IN">Indiana</option>
		<option value="IA">Iowa</option>
		<option value="KS">Kansas</option>
		<option value="KY">Kentucky</option>
		<option value="LA">Louisiana</option>
		<option value="ME">Maine</option>
		<option value="MD">Maryland</option>
		<option value="MA">Massachusetts</option>
		<option value="MI">Michigan</option>
		<option value="MN">Minnesota</option>
		<option value="MS">Mississippi</option>
		<option value="MO">Missouri</option>
		<option value="MT">Montana</option>
		<option value="NE">Nebraska</option>
		<option value="NV">Nevada</option>
		<option value="NH">New Hampshire</option>
		<option value="NJ">New Jersey</option>
		<option value="NM">New Mexico</option>
		<option value="NY">New York</option>
		<option value="NC">North Carolina</option>
		<option value="ND">North Dakota</option>
		<option value="OH">Ohio</option>
		<option value="OK">Oklahoma</option>
		<option value="OR">Oregon</option>
		<option value="PA">Pennsylvania</option>
		<option value="RI">Rhode Island</option>
		<option value="SC">South Carolina</option>
		<option value="SD">South Dakota</option>
		<option value="TN">Tennessee</option>
		<option value="TX">Texas</option>
		<option value="UT">Utah</option>
		<option value="VT">Vermont</option>
		<option value="VA">Virginia</option>
		<option value="WA">Washington</option>
		<option value="WV">West Virginia</option>
		<option value="WI">Wisconsin</option>
		<option value="WY">Wyoming</option>	
        </select>
        Zip Code <input type = "text" name = "zip" center> <br/> <br/>
        <input type="submit" value="Add Entry"/> <br/><br/>
</form>
        <a href="https://helios.vse.gmu.edu/~dchung25/IT207/Lab03/index.php">Return to Directory</a>

</div>
</div>
<footer>
	<?php
	include('footer.php');
	?>
</footer>
</body>
</head>