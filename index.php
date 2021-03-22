<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tariqul</title>
</head>
<body style="background-color:powderblue">
	<h1>Welcome to my page<?php echo $_COOKIE["user"];?></h1>
	<a href="cp.php">Change Password</a>
</body>
</html>