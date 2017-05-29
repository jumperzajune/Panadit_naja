<?php

// $my_numbers = [1, 2, 3, 4];
// echo count($my_numbers), PHP_EOL;
// echo ucfirst('June'), PHP_EOL;

$a = 10;
$b = 2;
echo add(10,2), PHP_EOL;
echo subtract(10,2), PHP_EOL;
echo capitalize('June','Aem'), PHP_EOL;
function capitalize($frist_name, $last_name) {
    $capital_frist_name = ucfirst($frist_name);
    $capital_last_name = ucfirst($last_name);
    return "{$capital_frist_name} {$capital_last_name}";
}


// function add($a,$b) {
//     return $a + $b;
// }
// function subtract($a,$b) {
//     return $a - $b;
// }