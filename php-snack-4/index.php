<?php
$array = [];
$MAX_LENGTH = 15;


while (count($array) < $MAX_LENGTH) {

    $number = rand(1, 20) . "\n";

    if (!in_array($number, $array)) {
        array_push($array, $number);
    }
}
  
echo implode('<br>', $array);
    
?>