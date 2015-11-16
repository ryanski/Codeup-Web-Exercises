<?php
// $message= '';
var_dump($_POST);
$username='';
$password='';

if(isset($_POST['username']) && isset($_POST['password'])) {
$username = isset($_POST['username']) ? htmlspecialchars(strip_tags($_POST['username'])) : '';
$password = isset($_POST['password']) ? htmlspecialchars(strip_tags($_POST['password'])) : '';


if($username=='guest' && $password=='password'){
	header('location:authorized.php');
	die();
} else {
	
		header('location: failed.php');
		
	}
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
		<label for "username">User name</label>
		<input type="text" id= "username" name='username'>

		<p><?php echo $username; ?></p>
		<label>Password</label>
		<input type="password" name='password'>
		<input type="submit"><br>
	<a href="login.php">Back</a>
</body>
</html>
