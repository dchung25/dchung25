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
            if(file_put_contents($file, $comb. "\n", FILE_APPEND | LOCK_EX) > 0){
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
<form action="createUpdate.php" method="post">
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
<a href="https://helios.vse.gmu.edu/~dchung25/IT207/Lab03/addcontact.php">Add New Contact Entry</a> <br/>
<a href="https://helios.vse.gmu.edu/~dchung25/IT207/Lab03/update.php">Update Contact Entry</a><br/>
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