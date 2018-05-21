<?php

class Sort
{

    public function bubbleSort($array)
    {
        $n = count($array);

        $swapped = true;
        $i = 0;

        while ($i < $n && $swapped) {
            $swapped = false;
            $nToCheck = $n - 1 - $i;
            for ($j = 0; $j < $nToCheck; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $swapped = true;
                    $this->swap($array, $j, $j + 1);
                }
            }
            $i++;
        }

        return $array;
    }

    public function selectSort($array)
    {
        $n = count($array);

        for ($i = 0; $i < $n - 1; $i++) {

            $minIndex = $i;

            for ($j = $i + 1; $j < $n; $j++) {
                if ($array[$minIndex] > $array[$j]) {
                    $minIndex = $j;
                }
            }

            if ($minIndex != 1) {
                $this->swap($array, $minIndex, $i);
            }

        }

        return $array;
    }

    public function testSort($array)
    {
        $n = count($array);

        for ($i = 0; $i < $n; $i++) {

            for ($j = $i + 1; $j < $n; $j++) {
                if ($array[$i] > $array[$j]) {
                    $this->swap($array, $i, $j);
                }
            }
        }

        return $array;
    }

    private function swap(&$array, $index1, $index2)
    {
        $val1 = $array[$index1];
        $val2 = $array[$index2];
        $array[$index1] = $val2;
        $array[$index2] = $val1;
    }
}