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

    /**
     * @param $arrayToSort
     * @return array
     */
    public function mergeSort(array $arrayToSort)
    {
        if (count($arrayToSort) == 1) {
            return $arrayToSort;
        }

        $mid = (int)count($arrayToSort) / 2;

        $left = $this->mergeSort(array_slice($arrayToSort, 0, $mid));
        $right = $this->mergeSort(array_slice($arrayToSort, $mid));

        return $this->merge($left, $right);
    }

    private function merge(array $left, array $right)
    {
        $arr = [];

        while (count($left) > 0 && count($right) > 0) {

            if ($left[0] > $right[0]) {
                $arr[] = array_shift($right);
            } else {
                $arr[] = array_shift($left);
            }
        }

        while (count($right) > 0) {
            $arr[] = array_shift($right);
        }
        while (count($left) > 0) {
            $arr[] = array_shift($left);
        }

        return $arr;
    }

    private function swap(&$array, $index1, $index2)
    {
        $val1 = $array[$index1];
        $val2 = $array[$index2];
        $array[$index1] = $val2;
        $array[$index2] = $val1;
    }
}