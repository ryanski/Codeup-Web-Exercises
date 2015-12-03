<?php

require_once '../park_logins.php';
require_once '../sql/db_connect.php';

require '../Input.php';


//round make sure it rounds when decimals are entered into page=''.
 $page = Input::has('page') ? round(Input::get('page')) : 1;

//this gets it to return back to start page when non numeric characters are entered or page <1 or >15.  So it won't break.
if(isset($_GET['page']) && (($_GET['page']>15 || $_GET['page']<1) || !is_numeric($_GET['page']))){
	header('location: national_parks.php');
	die();
}

 $offset=(($page-1)*4);


$selectAll = 'SELECT * FROM national_parks LIMIT 4 OFFSET '.$offset;

$stmt = $dbc->query($selectAll);

$parks = $stmt->FetchAll(PDO::FETCH_ASSOC);

// var_dump($parks)

?>

<link rel="stylesheet" href='/css/parks_css.css'/>
<link rel="stylesheet" href='/css/unsemantic_master/assets/stylesheets/unsemantic-grid-responsive-tablet.css'/>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
</head>
<body>
<?= "You are on page number $page"; ?>
	<h2>National Parks</h2>
	<h3>My First Database Driven Web Application</h3>
	<table class="grid_container">
		<tr>
			<th class='grid-15'>Park Name</th>
			<th class='grid-15'>Location</th>
			<th class='grid-15'>Date Established</th>
			<th class='grid-15'>Area</th>
			<th class='grid-15'>Visitors</th>
			<th class='grid-15'>Description</th>
		</tr>
			</div>
		<?php foreach ($parks as $parksArray) {?>
		<tr>  
			<td><?= $parksArray['name'] ?></td>
			<td><?= $parksArray['location'] ?></td>
			<td><?= $parksArray['date_established'] ?></td>
			<td><?= $parksArray['area'] ?></td>
			<td><?= $parksArray['visitors'] ?></td>
			<td><?= $parksArray['description'] ?></td>
		</tr>
		<?php } ?>			
	</table>
	<?php 
		if(isset($_GET['page']) && $_GET['page'] !=1) { ?>
			<a id = "previous" href="national_parks.php?page=<?=$page-1?>">Previous
		<?php } ?>
	<?php
		if(!isset($_GET['page']) || $_GET['page'] <15) { ?>
			<a id = "next" href="national_parks.php?page=<?=$page+1?>">Next
		<?php }?>

</body>