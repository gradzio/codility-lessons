<?php

namespace Lessons\Lesson4;

class PermCheck
{
    public function solution($A): int
    {
        $arrayLength = count($A);
        sort($A);

        if ($A[0] !== 1 || $A[$arrayLength-1] !== $arrayLength) {
            return 0;
        }

        for($i = 1; $i < $arrayLength - 1; $i++) {
            if ($A[$i] - $A[$i-1] > 1) {
                return 0;
            }
        }
        return 1;
    }
}