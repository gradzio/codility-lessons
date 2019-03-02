<?php

namespace Lessons\Lesson3;

class PermMissingElem
{
    public function solution($A): int
    {
        $arrayLength = count($A);
        sort($A);
        if ($A[0] !== 1) {
            return 1;
        }
        if ($arrayLength === 1) {
            return $A[0] + 1;
        }

        for($i = 0; $i <= ($arrayLength / 2); $i++) {
            if ($A[$i + 1] - $A[$i] > 1) {
                return $A[$i] + 1;
            }
            if ($A[$arrayLength - $i - 1] - $A[$arrayLength - $i - 2] > 1) {
                return $A[$arrayLength - $i - 2] + 1;
            }
        }
        return $A[$arrayLength-1] + 1;
    }
}
