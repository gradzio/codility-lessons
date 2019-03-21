<?php

namespace Lessons\Lesson9;

class MaxProfit
{
    public function solution($A): int
    {
        $arrayLength = count($A);

        if ($arrayLength < 2) {
            return 0;
        }

        $maxEnding = 0;
        $maxSlice = 0;
        for($i = 1; $i < count($A); $i++) {
            $profit = $A[$i] - $A[$i-1];
            $maxEnding = max(0, $maxEnding + $profit);
            $maxSlice = max($maxSlice, $maxEnding);
        }

        return $maxSlice;
    }
}
