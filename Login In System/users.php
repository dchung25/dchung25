<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login | 207 Enterprises</title>
</head>
<link rel="stylesheet" type="text/css" href="practicum2.css">
<body>
    <h1>207 Enterprises</h1>
    <?php
    $Fname = $_POST["Fname"];
    echo"<h2> Welcome Back $Fname</h2><a href='login.php?status=0'>Log Out</a>";
    $Lname = $_POST["Lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $fileName = "Practicum02.txt";
    $totalaccounts = -1;
    
    $combined = $Fname . ", " . $Lname . ", " . $email . ", " . $password;
    $file = fopen("Practicum02.txt", "r+");
    file_put_contents($fileName, PHP_EOL . $combined, FILE_APPEND | LOCK_EX)

    ?>

    <h2>Registered Users</h2><br/>
    <form action="sorted.php" method="post">
    Sorted by: <select name="sorted">
        <option value="First Name"> First Name</option>
        <option value="Last Name"> Last Name</option>
        <option value="Email"> Email</option>
</select>
<input type="submit" value="Sort"/> <br/><br/>
</form>
    <?php
    echo "<header>";
    echo "<div class='col'> First Name </div>";
    echo "<div class='col'> Last Name </div>";
    echo "<div class='col'> Email Address </div>";
    echo"</header>";
    if($file = fopen("Practicum02.txt", "r+")){
        //reads till the end of the file
        while(!feof($file)){
         //grabs the first line
         $cLine = fgets($file);
         //assigns tempLine to an indexed array separating from commas
         $tempLine = explode(", ", $cLine);
         echo "<div class='row'>";
         echo "<div class='col'> $tempLine[0] </div>";
         echo "<div class='col'> $tempLine[1] </div>";
         echo "<div class='col'> $tempLine[2] </div>";
         echo "</div>";
         $totalaccounts++;
     }
    }
     echo "Total Accounts: $totalaccounts";
     echo "<p> Last Date Modified: ", date("F d Y H:i:s", getlastmod()), " EST </p> <br/>";
    ?>

    
</body>
</html>