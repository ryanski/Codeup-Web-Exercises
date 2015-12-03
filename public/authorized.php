<?php
require_once '../Auth.php';
// require_once 'login.php';
	session_start();

	if(!isset($_SESSION["LOGGED_IN_USER"])){
		header('Location: login.php');
		die();
	}

	$username=$_SESSION["LOGGED_IN_USER"];
	
?>

<!DOCTYPE HTML>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>You are authorized!</h2>
	You are logged in as <?php echo $_SESSION["LOGGED_IN_USER"]; ?>
	<a href="logout.php">Log out</a>
	 <!-- Auth::attempt($username, $password, $hashpash); ?> -->
	


</body>
</html>
