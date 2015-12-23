<?php

require_once '../park_logins.php';
require_once '../sql/db_connect.php';

require '../Input.php';

$errorsArray=[];

function getPageNumber($dbc) 
{
	$query=$dbc->prepare('SELECT * FROM national_parks');
	$query->execute();
	$rowNumber=$query->rowCount();
	return $rowNumber;
 
}
 $rowNumber=getPageNumber($dbc);
 

// var_dump(getPageNumber($dbc));

$maxPage=$rowNumber/6;
var_dump($maxPage);
$maxPage=ceil($maxPage);
var_dump($maxPage);

//round make sure it rounds when decimals are entered into page=''.
 $page = Input::has('page') ? round(Input::get('page')) : 1;
//this gets it to return back to start page when non numeric characters are entered or page <1 or >15.  So it won't break.
if(isset($_GET['page']) && (($_GET['page']>$maxPage || $_GET['page']<1) || !is_numeric($_GET['page']))){
	header('location: national_parks.php');
	die();
}

$offset=(($page-1)*6);

$selectAll = 'SELECT * FROM national_parks LIMIT 6 OFFSET '.$offset;

$stmt = $dbc->query($selectAll);

$parks = $stmt->FetchAll(PDO::FETCH_ASSOC);



function insertPark($dbc,$park)
{	$errorsArray=[];
	try {
		$name = Input::getString('name');
	} catch(Exception $e) {
		$error=$e->getMessage();
		array_push($errorsArray, $error);
	}

	try {
		$location = Input::getString('location');
	} catch(Exception $e) {
		$error=$e->getMessage();
		array_push($errorsArray, $error);
	}

	try{
		$date_established = Input::getDate('date_established');
	} catch(Exception $e) {
		$error=$e->getMessage();
		array_push($errorsArray, $error);
	}

	try{
		$area = Input::getNumber('area');
	} catch(Exception $e) {
			$error=$e->getMessage();
			array_push($errorsArray, $error);
		}

	try{
		$visitors = Input::getString('visitors');
	} catch(Exception $e) {
			$error=$e->getMessage();
			array_push($errorsArray, $error);
		}

	try{
		$description = Input::getString('description');
	} catch(Exception $e) {
			$error=$e->getMessage();
			array_push($errorsArray, $error);
		}

	if(!empty($errorsArray))
	{
		return $errorsArray;
	}

	$query = "INSERT INTO national_parks (name, location, date_established, area, visitors, description)
				VALUES (:name, :location, :date_established, :area, :visitors, :description)";
	$query=$dbc->prepare($query);
	$query->bindValue(':name', $name, PDO::PARAM_STR);
	$query->bindValue(':location', $location, PDO::PARAM_STR);
	$query->bindValue(':date_established', $date_established, PDO::PARAM_STR);
	$query->bindValue(':area', $area, PDO::PARAM_STR);
	$query->bindValue(':visitors', $visitors, PDO::PARAM_STR);
	$query->bindValue(':description', $description, PDO::PARAM_STR);
	// $query->fetchAll(PDO::FETCH_ASSOC);
	$query->execute();
			
}

function deletePark($dbc) 
{
	$errorsArray=[];
	try{
		$delete_park = Input::getNumber('delete_park'); 
	}catch(Exception $e){
		$error = $e->getMessage();
		array_push($errorsArray, $error);
	}
	$query = "DELETE FROM national_parks WHERE id = :delete_park"; 
	$query=$dbc->prepare($query);
	$query->bindValue(':delete_park', $delete_park, PDO::PARAM_INT);
	$query->execute();

	return $errorsArray;
}

var_dump($_POST);


if(Input::notEmpty('name') && Input::notEmpty('location') && Input::notEmpty('date_established') &&
	Input::notEmpty('area') && Input::notEmpty('visitors') && Input::notEmpty('description'))
	{
		var_dump($errorsArray);
		$errorsArray=insertPark($dbc,$parks);
	} elseif(Input::notEmpty('delete_park')){
		$errorsArray=deletePark($dbc);
	}
	var_dump($errorsArray);
	


var_dump($parks);

?>

<script type="text/javascript">
$(document).ready(function() {
	"use strict";

	$(".deletePark").click(function(a) {
		var parkName = $(this).data('name');
		var parkId = $(this).data('id');

		if(confirm("Are you sure you want to delete "+parkName+"?")){
			$("#delete-id").val(parkId);
			$("#delete-form").submit();
		}
	});
})();
</script>


<link rel="stylesheet" href='/css/parks_css.css'/>
<link rel="stylesheet" href='/css/unsemantic_master/assets/stylesheets/unsemantic-grid-responsive-tablet.css'/>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
</head>
<body>
<?= "You are on page number $page"; ?>

<form method="post" id="delete-form">
	<input type="hidden" name='id' id="delete-id">
</form>
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
			<td class='deletePark'>Delete</td>
		</tr>
		<?php } ?>			
	</table>
	<?php 
		if(isset($_GET['page']) && $_GET['page'] !=1) { ?>
			<a id = "previous" href="national_parks.php?page=<?=$page-1?>"/>Previous</a>
		<?php } ?>
	<?php
		if(!isset($_GET['page']) || $_GET['page'] <$maxPage) { ?>
			<a id = "next" href="national_parks.php?page=<?=$page+1?>">Next</a>
		<?php }?>
		<?php foreach($errorsArray as $error): ?>
			<p><?= $error; ?></p>
		<?php endforeach; ?>
	<form method="POST">
		<p>
			<label for "name">Name:</label><br>
			<input type="text" id= "name" name='name'>
		</p>
		<p>	
			<label for "location">Location:</label><br>
		 	<input type="text" id="location" name='location'>
		</p>
		<p>
			<label for "date_established">Date Established</label><br>
			<input type="text" id= "date_established" name='date_established'>
		</p>
		<p>	
			<label for "area">Area</label><br>
		 	<input type="text" id="area" name='area'>
		</p>
		<p>
			<label for "visitors">Visitors</label><br>
			<input type="text" id= "visitors" name='visitors'>
		</p>
		<p>	
			<label for "description">Description</label><br>
		 	<input type="text" id="description" name='description'>
		</p>
		<p>
			<input type="submit">
		</p>
	<form method="POST">
		<p>
			<label for "name">Park to Delete</label<br>
			 <option selected="selected"></option>
			 <option value=>biology</option>
			<input type="text" id="delete_park" name='delete_park'>
		</p>
		<p> 
			<input type="submit">
		</p>

</body>