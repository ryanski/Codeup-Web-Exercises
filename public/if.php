<?php

 $a = 9;
 $b = 9;
 $c = '10';

 if ($a < $b) {
     // output the appropriate result
     echo "$a is less $b\n";
 } else {
     // output the appropriate result
     echo "$a is greater than $b\n";
 }

 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
 } else {
     // output the appropriate result
     echo "$b is not greater than or equal to $c\n";
     }
 
  if ($b === $c) {
     // output the appropriate result
     echo "$b is equal to $c and same data type as $c" . PHP_EOL;

 } else if ($b == $c) {
     // output the appropriate result
     echo "$b is equal to $c\n";
 } else if ($b != $c) {

 // output the appropriate result
     echo "$b is not equal to $c\n";
 } else if ($b !== $c) {

 // output the appropriate result
     echo "$b is not identical to $c\n";
 }



 ?>