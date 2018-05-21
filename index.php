<?php

require_once 'Sort.php';

$array = [];
for ($i = 0; $i < 10000; $i++) {
    $array[$i] = mt_rand(1, 9);
}

$sort = new Sort();

foreach ($array as $value) {
    echo $value . ', ';
}


print_r(PHP_EOL);

$starttime = microtime(true);
$x = $sort->selectSort($array);
$endtime = microtime(true);
$timediff = $endtime - $starttime;
print_r('SELECT_SORT   ' . $timediff . '      array:   ');
foreach ($x as $value) {
    echo $value . ', ';
}

echo PHP_EOL;

$starttime = microtime(true);
$x = $sort->bubbleSort($array);
$endtime = microtime(true);
$timediff = $endtime - $starttime;
print_r('BUBBLE_SORT   ' . $timediff . '     array:   ');
foreach ($x as $value) {
    echo $value . ', ';
}

echo PHP_EOL;

$starttime = microtime(true);
$x = $sort->insertionSort($array);
$endtime = microtime(true);
$timediff = $endtime - $starttime;
print_r('INSERTION_SORT ' . $timediff . '     array:   ');
foreach ($x as $value) {
    echo $value . ', ';
}

echo PHP_EOL;
