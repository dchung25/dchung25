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
<h1>Online Contacts Directory</h1>
    <h3> Search for a Contact</h3>
    <br/>
    <form action="searchContact.php" method="post">
    First Name <input type = "text" name = "fname" center><br/> <br/>
    Last Name <input type = "text" name = "lname" center> <br/> <br/>
    <input type="submit" value="Search"/> <br/><br/>
</form>
    <hr>
    <br/>
    <a href="https://helios.vse.gmu.edu/~dchung25/IT207/Lab03/addcontact.php">Add New Contact Entry</a> <br/>
    <a href="https://helios.vse.gmu.edu/~dchung25/IT207/Lab03/update.php">Update Contact Entry</a>
</div>
</div>
<footer>
	<?php
	include('footer.php');
	?>
</footer>
</body>
</head>