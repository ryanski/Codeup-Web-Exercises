<?php
do{
	fwrite(STDIN, "What is the starting number? \n");
	$start= trim(fgets(STDIN));
}while (empty($start));

fwrite(STDIN, "What is the ending number? \n");
$end= trim(fgets(STDIN));

fwrite(STDIN, "What is the increment? \n");
$incr= trim(fgets(STDIN));

for ($i=$start; $i<=$end; $i=$i+$incr) {
	echo "\$i is $i\n";
}