<?php

namespace Lessons\Lesson14;

class MinMaxDivision
{
    public function solution(int $K, int $M, array $A): int
    {
        $N = count($A);
        $max = array_sum($A);
        $min = max($A);
        if ($K === 1) {
            return $max;
        }
        if ($K >= $N) {
            return $min;
        }

        while ($min <= $max) {
            $mid = ceil($min + (($max - $min) / 2));
            $canDivideIntoK = $this->canDivideIntoK($A, $K, $mid);
            if ($canDivideIntoK) {
                $max = $mid - 1;
            } else {
                $min = $mid + 1;
            }
        }
        return ceil($min);
    }

    private function canDivideIntoK($A, $K, $maxSumOfBlock): bool
    {
        $left = 0;
        $numOfBlocks = 0;
        for ($i = 0; $i < count($A); $i++) {
            if ($left + $A[$i] > $maxSumOfBlock) {
                $numOfBlocks++;
                $left = $A[$i];
            } else {
                $left += $A[$i];
            }
            if ($numOfBlocks >= $K) {
                return false;
            }
        }

        return true;
    }
}
