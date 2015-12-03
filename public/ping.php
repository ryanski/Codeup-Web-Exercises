<?php
require_once '../Input.php';
// require 'functions.php';
function pageController()
{
	$counter = Input::get('key');
	// $counter = isset($_GET['key']) ? $_GET['key']: 0;
	



	return array(
		'counter' => $counter);
		
}
extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' href="/css/css_pingpong.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>
<body>
	<h2>Ping:<?= $counter ?></h2>
	<a class="PingPong" href="pong.php?key=<?=$counter+1?>">Hit</a>
	<a class="PingPong" href="ping.php?key=<?=$counter=0?>">Miss</a>

</body>
</html>
