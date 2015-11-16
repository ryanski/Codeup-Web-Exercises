<?php
function pageController()
{
	$counter = isset($_GET['key']) ? $_GET['key']: 0;
	
	$up=$counter+1;
	$down=$counter-1;


	return array(
		'counter' => $counter,
		'up' => $up,
		'down' => $down);
		
}
extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Current Counter Value:<?= $counter ?></h2>
	<a href="counter.php?key=<?=$up; ?>">Up</a>
	<a href="counter.php?key=<?=$down; ?>">Down</a>

</body>
</html>