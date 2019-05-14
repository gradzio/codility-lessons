<?php

namespace Lessons\Lesson15;

class CountTriangles
{
    public function solution(array $A): int
    {
        $N = count($A);

        if ($N < 3) {
            return 0;
        }

        $trippleCount = 0;

        $start = 0;

        sort($A);

        while ($start < $N - 2) {
            $mid = $start + 1;
            $end = $start + 2;
            while ($end < $N) {
                if ($A[$start] + $A[$mid] > $A[$end]) {
                    $trippleCount += $end - $mid;
                    $end++;
                } elseif ($mid < $end -1) {
                    $mid++;
                } else {
                    $mid++;
                    $end++;
                }
            }
            $start++;
        }

        return $trippleCount;
    }
}
