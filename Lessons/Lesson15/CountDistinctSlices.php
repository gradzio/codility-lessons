<?php

namespace Lessons\Lesson15;

class CountDistinctSlices
{
    public function solution(int $M, array $A): int
    {
        $maxCount = 1000000000;
        $N = count($A);

        if ($N === 1) {
            return 1;
        }
        if ($M === 0) {
            return $N;
        }

        $distinctCount = 0;
        $seen = array_fill(0, $M+1, false);
        $front = 0;
        $back = 0;

        while ($front < $N) {
            if ($back < $N && $seen[$A[$back]] === false) {
                $seen[$A[$back]] = true;
                $back++;
            } else {
                $distinctCount += $back - $front;
                if ($distinctCount > $maxCount) {
                    return $maxCount;
                }
                $seen[$A[$front]] = false;
                $front++;
            }
        }

        return $distinctCount;
    }
}
