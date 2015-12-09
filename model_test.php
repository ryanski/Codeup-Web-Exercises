<?php

//1. Ensure that the Model connects to the database.
//2. Scan or read the entire starting code.
//3. Identify the easiest or quickest place to start.
//3.5 Identify problems or issues that I can put off or delay entirely.
// -- stackoverflow the heck out of everything.
//4. Goto step 2.
//

require_once 'park_logins.php';
require_once 'Model.php';


class User extends Model
{
	protected static $table = 'national_parks';
}

// $dbc = new Model();
// $user->first_name = 'Ryan';
// $user->save();

// var_dump($dbc);

// var_dump(User::all());

var_dump(User::find(7));

$p = User::find(6);

echo $p->name.PHP_EOL;

var_dump($p);


// var_dump($p);
// $p->save();

$newPark= new User();
$newPark->name = 'The Moon';
$newPark->location = 'Not on Earth';
$newPark->date_established = 'A billion years ago';
$newPark->visitors = 'Less than a dozen';
var_dump($newPark);
$newPark->save();

// $newPark->insert();

// $Park=User::find(7);

// $Park->location='Jupiter';
// $Park->visitors='1';

// $Park->save();



// $park = User::find(7);
// $park->name= 'new name';
// $park->save();
// var_dump($park);

// var_dump($newPark);
// $test = new User();
// $test->someThing = 'Thing';

// echo $test->someThing.PHP_EOL;
