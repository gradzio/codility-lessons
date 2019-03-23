<?php

namespace Lessons\Lesson9;

class MaxDoubleSliceSum
{
    public function solution($A): int
    {
        $arrayLength = count($A);

        if ($arrayLength < 4) {
            return 0;
        }

        $leftSlice = $untilNow = $onceTotal = 0;
        for ($i = 3; $i < $arrayLength; $i++) {
            $leftSlice = max(0, $A[$i-2] + $leftSlice);
            $untilNow = max($leftSlice, $A[$i-1] + $untilNow);
            $onceTotal = max($untilNow, $onceTotal);
        }

        return $onceTotal;
    }
}
