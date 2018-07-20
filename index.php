<?php

require_once 'Sort.php';
require_once 'Funny.php';
require_once 'Math.php';

//$array = [];
//for ($i = 0; $i < 10000; $i++) {
//    $array[$i] = mt_rand(1, 9);
//}
//
//test('mergeSort', $array);
//test('selectSort', $array);
//test('bubbleSort', $array);
//
//function test($functionName, $array)
//{
//    $sort = new Sort();
//    $starttime = microtime(true);
//    $sort->{$functionName}($array);
//    $endtime = microtime(true);
//    $timediff = $endtime - $starttime;
//    print_r($functionName . ' ' . $timediff . PHP_EOL);
//}

//$funny = new Funny();
//$funny->drawLeftSidePyramid(13);
//$funny->drawXmasTree(13);

$math = new Math();

//$c = $math->isEven(78);

$arr1 = [1,2,3,4,1,2,3,1,2,3,4,5,1,2,3,4,5,6,7,8,1,2,3,1,2,3,4,5,1,2,3,4];

$c = $math->findBiggestSequence($arr1);

var_dump($c);