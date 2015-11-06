<?php
do {
// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
$firstName = trim(fgets(STDIN));

var_dump($firstName);

} while (empty($firstName));


// Output the user's name
fwrite(STDOUT, "Hello $firstName\n");

?>