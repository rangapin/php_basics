<?php 

function calculate($number1, $number2) {
    $sum = $number1 + $number1;
    $diff = $number1 - $number2;
    return [$sum, $diff];
}

 $results = calculate(10, 3);
 echo $results[0];
 echo $results[1];

