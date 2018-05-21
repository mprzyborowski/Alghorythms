<?php

class Sort
{

    /**
     * find highest one and move to the end
     *
     * @param $array
     * @return mixed
     */
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

    /**
     * @param $array
     * @return mixed
     */
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

    public function insertionSort($array)
    {
        $n = count($array);

        for ($i = 1; $i < $n; $i++) {
            $currentElement = $array[$i];
            $j = $i;

            while ($j > 0 && $currentElement < $array[$j - 1]) {
                $array[$j] = $array[$j - 1];
                $j--;
            }

            $array[$j] = $currentElement;
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