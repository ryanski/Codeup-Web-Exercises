<?php
require 'functions.php';
$message= '';

session_start();

if(isset($_SESSION["LOGGED_IN_USER"]))
	{
		header('location:authorized.php');
	}

var_dump($_POST);
$username='';
$failedlogin=false;
$password='';

// if(isset($_POST['username']) && isset($_POST['password']))
//  {
// 	$username = isset($_POST['username']) ? htmlspecialchars(strip_tags($_POST['username'])) : '';
// 	$password = isset($_POST['password']) ? htmlspecialchars(strip_tags($_POST['password'])) : '';
	
	$username = inputGet('username');
	$password = inputGet('password');

	if($username=='guest' && $password=='password'){
		$_SESSION["LOGGED_IN_USER"]=$username;
		header('location:authorized.php');
		die();
	} elseif ($username!=''){
	
		$failedlogin=true;
		
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Name</h2>
	<p><?php echo $username; ?></p>
	<h2>Number</h2>
	<form method="POST">
		<p><?= escape($username); ?></p>
		<!-- Session Id: <?php echo $sessionId; ?><br>
    	View Count: <?php echo $viewCount; ?><br><br> -->
		<label for "username">User name</label>
		<input type="text" id= "username" name='username'><br>
		<label>Password</label>
		<input type="password" name='password'>
		<input type="submit"><br>
	<a href="login.php">Back</a>
</body>
</html>
