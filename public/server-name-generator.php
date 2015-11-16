<?php 
$adjectives=['Wonky', 'Crazy', 'Curious', 'Snooty', 'Kooky', 'Lusty', 'Fascinating', 'Magical', 'Languid', 'Pouty'];
$nouns=['Tigers', 'Unicorns', 'Sheep', 'Dragons', 'Pandas', 'Dogs', 'Cats', 'Elephants', 'Ducks', 'Dinosaurs'];
$rAdjectives = array_rand($adjectives);
$rNouns = array_rand($nouns);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
</head>
<body>
	<h2>Server name is....</h2>
	<h3><?= $adjectives[$rAdjectives].' '.$nouns[$rNouns] ?></h3>
	<!-- question mark php echo can be replaced with question mark equal.
	 instead of { for if() use : and close with endif; -->

</body>
</html>