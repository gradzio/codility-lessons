<?php

namespace Lessons\Lesson4;

class FrogRiverOne
{
    public function solution($X, $A)
    {
        $arrayLength = count($A);
        if ($X < 1 || $arrayLength == 0 || $arrayLength < $X) {
            return -1;
        }

        $path = array_fill_keys(range(1, $X), 0);
        foreach ($A as $second => $position) {
            unset($path[$position]);
            if (count($path) === 0) {
                return $second;
            }
        }

        return -1;
    }
}
