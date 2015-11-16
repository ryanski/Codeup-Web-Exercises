<?php $favoritethings = ['Movies' => ["The Dark Knight", "Die Hard", "The Martian", "The Gladiator"], "Books" => ["Book1", "Book2", "Book3"]];
		  $thingsIwantToDo = ["Countries" => ["Thailand", "Chile", "Argentina", "Ukraine", "Italy", "New Zealand", "China", "Nigeria", "Morocco", "South Africa", "Antartica"],"Recreation" => ["White Water Kayaking/Rafting", "Surfing", "Kite Boarding", "Paragliding", "Mountain Climbing", "Sailing", "MMA"]];

?>
<!DOCTYPE <html>
<head>
	<title></title>
</head>
<body>
	<h2>Favorite Movies</h2>
	<ul><?php 
		foreach($favoritethings['Movies'] as $things): ?>
			<li><?= $things; ?></li>
			
			<?php endforeach; ?>
	</ul>
	<ul><?php 
		foreach($favoritethings['Books'] as $things){ ?>
			<li><?php echo $things; ?></li>
			
			<?php } ?>
	</ul>
	<ul><?php foreach($thingsIwantToDo['Countries'] as $things){ ?>
			<li><?php echo $things; ?></li>
			
			<?php } ?>
	</ul>


	

</body>
</html>