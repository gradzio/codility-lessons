<?php

namespace Lessons\Lesson4;

class MaxCounters
{
    public function solution(int $N, array $A): array
    {
        $counters = array_fill(0, $N, 0);
        $maxCount = 0;
        $last = 0;
        foreach ($A as $X) {
            if ($X == $N + 1) {
                $last = $maxCount;
            } else {
                if ($counters[$X-1] > $last) {
                    $counters[$X-1] += 1;
                } else {
                    $counters[$X-1] = $last + 1;
                }

                if ($maxCount < $counters[$X-1]) {
                    $maxCount = $counters[$X-1];
                }
            }
        }

        for ($i = 0; $i < count($counters); $i++) {
            if ($counters[$i] < $last) {
                $counters[$i] = $last;
            }
        }
        return $counters;
    }
}
