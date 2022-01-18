<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
        Update Contact
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
<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $bool = true;
    //Defines the file
    define("FILENAME", "text.txt");
    //Checks if any of the variables are empty
    if(empty($fname) == true || empty($lname) == true || empty($email) == true
    || empty($phone) == true || empty($address) == true || empty($city) == true
    || empty($state) == true || empty($zip) == true){
        //If they are then it tells the user that they must enter something in each field
        echo "You must enter a value in each field. Click your browser's back button to return to the form.";
        //Then it turns a variable false so that later we can check if all the fields are filled in
        $bool = false;
    }
    //This combines all the variables into a single line
    $comb = $fname . ', ' . $lname . ', ' . $email . ', ' . $phone . ', ' . $address  . ', ' . $city . ', ' . $state . ', ' . $zip;
    //Assigns a variable to the file name so that we can use it to write into the file
    $file = "text.txt";
    //Checks if all the fields are true
    if($bool == true){
        //checks to see if the number of bytes that were returned is greater than or equal to one to see if we can write in the file
        if(file_put_contents($file, $comb, FILE_APPEND | LOCK_EX) > 0){
            //if its greater than 1 it'll actually then write in the file and tell the user it was sucessful
            file_put_contents($file, $comb. "\n", FILE_APPEND | LOCK_EX);
            echo "Your contact entry has been successfully Added/Updated";
        }
        else{
            //otherwise itll tell the user it was not sucessful
            echo "Your contact entry has not been sucessfully Added/Updated or the lock was unsuccessful, try again";
        }
    } 
?>
    <br/>
    <a href="https://helios.vse.gmu.edu/~dchung25/IT207/Lab03/addcontact.php">Add New Contact Entry</a> <br/>
    <a href="https://helios.vse.gmu.edu/~dchung25/IT207/Lab03/update.php">Update Contact Entry</a> <br/>
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