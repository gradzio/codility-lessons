<?php

namespace Lessons\Lesson6;

class MaxProductOfThree
{
    public function solution($A): int
    {
        $arrayLength = count($A);
        if ($arrayLength === 3) {
            return $A[0] * $A[1] * $A[2];
        }

        sort($A);
        $biggest = $A[$arrayLength-1];
        $medium = $A[$arrayLength-2];
        $smallest = $A[$arrayLength-3];
        $allPositive = $biggest * $medium * $smallest;
        $mixNumbers = $A[0] * $A[1] * $A[$arrayLength - 1];

        return $allPositive > $mixNumbers ? $allPositive : $mixNumbers;
    }
}
