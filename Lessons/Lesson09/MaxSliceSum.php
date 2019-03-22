<?php

namespace Lessons\Lesson9;

class MaxSliceSum
{
    public function solution($A): int
    {
        $arrayLength = count($A);

        if ($arrayLength == 1) {
            return $A[0];
        }

        $maxSlice = 0;
        $maxLeft = 0;
        for ($i = 0; $i < $arrayLength; $i++ ) {
            $maxLeft = max(0, $maxLeft + $A[$i]);
            $maxSlice = max($maxLeft, $maxSlice);
        }

        return $maxSlice > 0 ? $maxSlice : max($A);
    }
}