<?php

namespace Lessons\Lesson1;

class CyclicRotation
{
    public function solution($A, $K)
    {
        $arrayLength = count($A);
        if ($K === 0 || $arrayLength <= 1 || $arrayLength === $K) {
            return $A;
        }
        $return = [];
        $chopIndex = $this->calculateShiftedIndex(0, $arrayLength, $K);
        $chopSize = $arrayLength - $chopIndex;

        return array_merge(array_slice($A, $chopSize), array_slice($A, 0, $chopSize));
    }

    public function calculateShiftedIndex($idx, $arrayLength, $k)
    {
        return ($idx + $k) % $arrayLength;
    }
}
