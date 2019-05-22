<?php

namespace Lessons\Lesson15;

class MinAbsSumOfTwo
{
    public function solution(array $A): int
    {
        $N = count($A);

        if ($N === 1) {
            return abs($A[0] + $A[0]);
        }

        sort($A);

        $absSum = INF;
        $i = 0;
        $j = count($A) - 1;

        while ($i <= $j) {
            $absSum = min($absSum, abs($A[$i] + $A[$j]));
            if (abs($A[$i]) > abs($A[$j])) {
                $i++;
            } else {
                $j--;
            }
        }

        return $absSum;
    }
}
