<?php

require_once 'park_logins.php';

require_once 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";




// $dbc = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);


$dbc->exec('DROP TABLE IF EXISTS national_parks');

$query = "CREATE TABLE national_parks (
	ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(500) NOT NULL,
	location VARCHAR(500) DEFAULT 'NONE',
	date_established VARCHAR(500),
	area VARCHAR(500),
	visitors VARCHAR(500),
	description TEXT,
	PRIMARY KEY (ID)
	)";

$dbc->exec($query);
