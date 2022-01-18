<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login | 207 Enterprises</title>
</head>
<link rel="stylesheet" type="text/css" href="practicum2.css">
<body>
	<h1>207 Enterprises</h1>
  <?php
	if(isset($_GET['status']) && $_GET['status']==0)
		echo "<div class='redblock'>Logged Out Successfully</div>";
	else if(isset($_GET['status']) && $_GET['status']==401)
		echo "<div class='redblock'>Error: Invalid email address or password</div>";
	?>
	<div class="greenblock">Please log in to continue</div>
	<form action="users2.php" method="post">
		<p>
			Email
			<input name="email" type="text" placeholder="Email"/>
		</p>
		<p>
			Password
			<input name="password" type="password" placeholder="Password"/>
		</p>
		<p>
			<input name="login" type="submit" value="Login" />
			<span> or </span>
			<a href="register.html">Register new account</a>
		</p>
	</form>
	<?php
    echo "<p> Last Date Modified: ", date("F d Y H:i:s", getlastmod()), " EST </p> <br/>";
    ?>
	<a href='https://helios.vse.gmu.edu/~dchung25/IT207/Lab00/index.php'>Home Page</a>
</div>
</body>
</html>
