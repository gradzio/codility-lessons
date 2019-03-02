<?php

namespace Lessons\Lesson3;


class TapeEquilibrium
{
    public function solution($A): int
    {
        $arrayLength = count($A);
        $left = $A[0];
        $right =  array_sum(array_slice($A, 1));
        $minDistance = abs($left - $right);
        for($i=1; $i<$arrayLength - 1; $i++) {
            $left += $A[$i];
            $right -= $A[$i];
            $minDistance = min($minDistance, abs($left - $right));
        }
        return $minDistance;
    }
}