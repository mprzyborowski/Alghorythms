<?php

class Funny
{

    public function drawLeftSidePyramid(int $nElements)
    {
        $rows = $nElements * 2 - 1;

        for ($i = 1; $i < $rows; $i++) {
            if ($i > $nElements) {
                $i = $i - 2;
                $nElements--;
                $rows--;
            }

            if ($i == 0) {
                break;
            }

            $x = range(1, $i);
            $str = implode('', $x) . PHP_EOL;

            echo $str;
        }
    }

    public function drawXmasTree(int $nElements)
    {
        $columns = $nElements * 2 - 1;
        $midValues[0] = round(($nElements * 2 - 1) / 2, 0, PHP_ROUND_HALF_DOWN);

        $left = 0;
        $right = 0;

        for ($i = 0; $i < $nElements; $i++) {

            $str = '';
            for ($j = 0; $j < $columns; $j++) {

                if (count($midValues) == $columns) {
                    $midValues = [0 => $midValues[0]];
                }

                if (!in_array($j, $midValues)) {
                    $str .= '_';
                } else {
                    $str .= '*';
                }
            }

            if (isset($midValues[$left])) {
                $left = array_push($midValues, $midValues[$left] - 1) - 1;
            }

            if (isset($midValues[$right])) {
                $right = array_push($midValues, $midValues[$right] + 1) - 1;
            }

            echo $str . PHP_EOL;

        }
    }

}