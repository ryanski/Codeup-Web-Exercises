<?php
require_once '../Input.php';
// require_once '/vagrant/sites/codeup.dev/Input.php';
// require 'functions.php';
function pageController()
{
	$counter = Input::get('key');
	// $counter = isset($_GET['key']) ? $_GET['key']: 0;
	
	// $up=$counter+1;
	// $down=$counter-1;


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
</head>
<body>
	<h2>Pong:<?= $counter ?></h2>
	<a class="PingPong" href="ping.php?key=<?=$counter+1?>">Hit</a>
	<a class="PingPong" href="ping.php?key=<?=$counter=0?>">Miss</a>

</body>
</html>