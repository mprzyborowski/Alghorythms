<?php
/**
 * Created by PhpStorm.
 * User: marcin
 * Date: 03.06.18
 * Time: 13:04
 */

class Math
{

    public function isPrime(int $int)
    {
        if (0 === $int || 1 === $int) {
            return false;
        }

        $absValue = abs($int);

        if (2 === $absValue || 3 === $absValue) {
            return true;
        }

        if ($absValue % 2 === 0 || $absValue % 3 === 0) {
            return false;
        }

        return true;
    }

    public function isEven(int $int)
    {
        return !($int & 1);
    }

    public function mersennePrime(int $prime)
    {
        return pow(2, $prime) - 1;
    }

    public function arrayDiff(array $arr1, array $arr2)
    {
        $temp = [];

        foreach ($arr1 as $key1 => $val1) {
            $tempVar = null;

            foreach ($arr2 as $key2 => $val2) {
                if ($val1 === $val2) {
                    $tempVar = null;
                    break;
                }
            }
        }

        return $temp;
    }

    public function findBiggestSequence(array $array)
    {
        $sequences = [];
        $sequence = 0;
        foreach ($array as $key => $value) {
            if (isset($array[$key+1]) && $value + 1 == $array[$key+1]) {
                $sequences[$sequence][] = $value;
            } else {
                $sequence++;
            }
        }

        $count = 0;
        $biggest = [];

        foreach ($sequences as $item) {
            if (count($item) > $count) {
                $count = count($item);
                $biggest = $item;
            }
        }

        return $biggest;
    }
}