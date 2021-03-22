<?php

	$uname = "";
	$pass = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname = $_POST["uname"];
		$pass = $_POST["pass"];
		if($uname == "tarikul" && $pass == "abcdef")

			session_start();
			$_SESSION["user"] = $uname;
		
			setcookie("user",$uname,time()+120,"/");
			header("Location: index.php");
		}

	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body style="background-color:yellow">
	<form method="post ">
		<input type="text" name="uname" placeholder="Username"><br><br>
		<input type="password" name="pass" placeholder="Password"><br><br>
		<input type="submit" value="Login">
	</form>
	<a href="register.php">Register</a>
</body>
</html>