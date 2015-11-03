<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<strict>
		<html>
<head>
    <title></title>
</head>
<body>
<?php

$i=1;
while($i<=100) {
	echo 'i equals ' . $i . PHP_EOL;
	$i++;
} 

$fizzbuzz=1;
while($fizzbuzz<=100) {
	if(($fizzbuzz%3==0 && $fizzbuzz%5==0)) {
		echo 'FizzBuzz' . PHP_EOL;
	} else if($fizzbuzz%5==0) {
		echo 'Buzz' . PHP_EOL;
	} else if($fizzbuzz%3==0) {
		echo 'Fizz' . PHP_EOL;
	} else {
		echo $fizzbuzz . PHP_EOL;
	}
	$fizzbuzz++;
}



?>
    <h1>FizzBuzz</h1>

    <ul>
        <li>Output numbers from 1-100</li>
        <li>For multiples of 3, output "Fizz" instead of the number</li>
        <li>For multiples of 5, output "Buzz" instead of the number</li>
        <li>For multiples of both 3 and 5, output "FizzBuzz"</li>
        <li>For all other numbers, output the number's value</li>
    </ul>

    <p>
        1
        2
        "Fizz"
        4
        "Buzz"
        "Fizz"
        7
        8
        "Fizz"
        "Buzz"
        11
        "Fizz"
        13
        14
        "FizzBuzz"
        16
        17
        "Fizz"
        ....

    </p>

<script>


</script>
</body>
</html>
			
	</strict>
</body>
</html>

