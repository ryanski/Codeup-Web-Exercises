<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'password');

require  'db_connect.php';

$clear= 'truncate national_parks';

$dbc->exec($clear);

require 'parks_parser.php';

// $users = [
//     ['name' => 'Arches',   'location' => 'UT', date_established => '1929-04-12', area_in_acres => '76518.98'],
//     ['name' => 'Badlands',   'location' => 'SD', date_established => '1978-11-10', area_in_acres => '242755.94'],
//     ['name' => 'Carlsbad',   'location' => 'NM', date_established => '1930-05-14', area_in_acres => '46766.45']
//     ['name' => 'Denali',   'location' => 'AK', date_established => '1917-02-26', area_in_acres => '4740911.72']
//     ['name' => 'Dry Tortugas',   'location' => 'FL', date_established => '1992-10-26', area_in_acres => '64701.22']
//     ['name' => 'Everglades',   'location' => 'FL', date_established => '1934-05-30', area_in_acres => '1508537.90']
//     ['name' => 'Glacier',   'location' => 'MN', date_established => '1910-05-11', area_in_acres => '1013572.41']
//     ['name' => 'Grand Canyon',   'location' => 'AZ', date_established => '1919-02-26', area_in_acres => '1217403.32']

// ];

foreach ($parksArray as $park) {
    $query = "INSERT INTO national_parks
     (name, location, date_established, area, visitors, description)
      VALUES (
      	'{$park['Name']}', 
      	'{$park['Location']}',
		'{$park['Date Established']}',
    	'{$park['Area']}',
    	'{$park['Recreation Visitors']}',
    	\"{$park['Description']}\"
    )";

	$dbc->exec($query);
}

   

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;




