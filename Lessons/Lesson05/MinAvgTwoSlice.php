<?php

namespace Lessons\Lesson5;

class MinAvgTwoSlice
{
    public function solution($A): int
    {
        $minAvg = INF;
        for ($i = 0; $i < count($A) - 1; $i++) {
            $sum = $A[$i];
            $size = 1;
            $j = $i;
            do {
                ++$j;
                $sum += $A[$j];
                $size++;
                $avg = $sum / $size;
                if ($avg < $minAvg) {
                    $minAvg = $avg;
                    $pos = $i;
                }
            } while ($j < count($A) - 1 && ($sum + $A[$j+1]) / ($size + 1) < $avg);
        }

        return $pos;
    }
}
