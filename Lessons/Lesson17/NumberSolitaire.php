<?php

namespace Lessons\Lesson17;

class NumberSolitaire
{
    public function solution(array $A): int
    {
        $N = count($A);
        $dies = 6;
        $maxScore = array_fill(0, $dies, $A[0]);

        for ($idx = 1; $idx < $N; $idx++) {
            $maxScore[$idx % $dies] = max($maxScore) + $A[$idx];
        }

        return $maxScore[($N-1) % $dies];
    }
}
