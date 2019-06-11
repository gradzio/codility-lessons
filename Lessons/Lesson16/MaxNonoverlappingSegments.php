<?php

namespace Lessons\Lesson16;

class MaxNonoverlappingSegments
{
    public function solution(array $A, array $B): int
    {
        $N = count($A);

        if ($N < 1) {
            return 0;
        }

        $count = 1;
        $prevEnd = $B[0];
        for ($i = 1; $i < $N; $i++) {
            if ($A[$i] > $prevEnd) {
                $count++;
                $prevEnd = $B[$i];
            }
        }

        return $count;
    }
}
