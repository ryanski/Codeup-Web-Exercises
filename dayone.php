<?php
$d=array_count_values(str_split(file_get_contents("dayone.txt")));
var_dump($d);
print $d['(']-$d[')']."\n";
print $d."\n";