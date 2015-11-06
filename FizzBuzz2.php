<?php
fwrite(STDOUT, 'What is your starting number?'.PHP_EOL);
$startnum=trim(fgets(STDIN));
fwrite(STDOUT, 'What is your ending number?'.PHP_EOL);
$endnum=trim(fgets(STDIN));
fwrite(STDOUT, 'By what number do we increment?'.PHP_EOL);
$incr=trim(fgets(STDIN));
for ($a=$startnum; $a<=$endnum; $a=$a+$incr) {
	if($a%3==0 && $a%5==0) {
		echo 'FizzBuzz'. PHP_EOL;
	} else if($a%3==0) {
		echo 'Fizz'. PHP_EOL;
	} else if($a%5==0) {
		echo 'Buzz'. PHP_EOL;
	} else {
		echo "$a". PHP_EOL;
	}
}

// for ($a=1; $a<100; $a++) {
// 	if($a%3==0 && $a%5==0) {
// 		echo 'FizzBuzz'. PHP_EOL;
// 	} else if($a%3==0) {
// 		echo 'Fizz'. PHP_EOL;
// 	} else if($a%5==0) {
// 		echo 'Buzz'. PHP_EOL;
// 	} else {
// 		echo "$a". PHP_EOL;
// 	}
// }