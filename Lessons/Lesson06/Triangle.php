<?php

namespace Lessons\Lesson6;

class Triangle
{
    public function solution($A): int
    {
        $arrayLength = count($A);
        if ($arrayLength < 3) {
            return 0;
        }

        sort($A);

        for ($i = 0; $i < $arrayLength - 2; $i++) {
            $p = $A[$i];
            if ($p <= 0) {
                continue;
            }
            $q = $A[$i+1];
            $r = $A[$i+2];
            if ($p + $q > $r) {
                return 1;
            }
        }

        return 0;
    }
}
