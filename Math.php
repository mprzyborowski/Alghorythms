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
}