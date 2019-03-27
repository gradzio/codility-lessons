<?php

namespace Lessons\Lesson10;

class Flags
{
    public function solution(array $A): int
    {
        $arrayLength = count($A);

        $peaks = [];
        for ($i = 1; $i < $arrayLength - 1; $i++) {
            if ($A[$i - 1] < $A[$i] && $A[$i] > $A[$i + 1]) {
                $peaks[] = $i;
            }
        }

        if (count($peaks) == 0) {
            return 0;
        }

        $maxFlagCount = floor(sqrt($peaks[count($peaks)-1]-$peaks[0])) + 1;

        for ($maxDistance = $maxFlagCount; $maxDistance > 1; $maxDistance--) {
            $flagCount = 1;
            $distanceBetween = 0;
            for ($j = 1; $j < count($peaks); $j++) {
                $distanceBetween += $peaks[$j] - $peaks[$j-1];
                if ($distanceBetween >= $maxDistance) {
                    $flagCount++;
                    $fromFlag = 0;
                }
            }

            if ($flagCount >= $maxDistance) {
                return $maxDistance;
            }
        }

        return 1;
    }
}
