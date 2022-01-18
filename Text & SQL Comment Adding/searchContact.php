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
    define("FILENAME", "text.txt");
    //checks to see if there is a value in each field
    if(empty($fname) == true || empty($lname) == true){
        echo "Enter a value in each field. Click your browser's back button to try again!";
    }
    //Assigns a variable to the file name
    $fileN = "text.txt";
    //checks to see if the file exist
    if(file_exists($fileN) == false){
        //if not itll break and tell the user that it doesnt exist
        echo "The file does not exist. Click your browser's back button and add a contact to perform a search.";
    }
        $i =0;
        //opens file 
        $file = fopen("text.txt", "r+");     
        if($file){
            //checks to see if theres an error as fgets returns false whens theres an error
            while(fgets($file) !== false){
                //gets the line
                $cLine = fgets($file);
                //creates the array with all the values using , as the separator
                $final = explode(", ", $cLine);
                //checks if the first and last name match the search
                if($final[0] == $fname && $final[1] == $lname){
                    //shows search results
                    echo "The search was a success <br/><br/> Result: <br/><br/>";
                    echo $cLine;
                    echo "<br/>";
                    $i++;
                }
            }
        }
        fclose($file);
        if($i == 0){
            echo "Search Unsuccessful <br/> This entry does not exist. Please try Again.";
        }
    
    ?>
    <br/>
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