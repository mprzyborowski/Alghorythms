<?php

require_once 'Sort.php';

$array = [];
for($i = 0; $i < 10; $i++) {
    $array[$i] = mt_rand(1,9);
}

$sort = new Sort();

$starttime = microtime(true);
$x = $sort->selectSort($array);
$endtime = microtime(true);
$timediff = $endtime - $starttime;
print_r('SELECT_SORT '.$timediff.PHP_EOL);

$starttime = microtime(true);
$x = $sort->bubbleSort($array);
$endtime = microtime(true);
$timediff = $endtime - $starttime;
print_r('BUBBLE_SORT '.$timediff.PHP_EOL);
