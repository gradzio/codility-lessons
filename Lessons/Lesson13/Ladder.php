<?php

namespace Lessons\Lesson13;

class Ladder
{
    public function solution(array $A, array $B): array
    {
        $limit = max($A);
        $result = array_fill(0, count($A), 0);
        $modLimit = (1 << max($B)) - 1;

        $fib = array_fill(0, $limit+2, 0);
        $fib[1] = 1;

        for ($i = 2; $i < $limit+2; $i++) {
            $fib[$i] = ($fib[$i-1] + $fib[$i - 2]) & $modLimit;
        }

        for ($j = 0; $j < count($A); $j++) {
            $result[$j] = $fib[$A[$j] + 1] & ((1 << $B[$j]) - 1);
        }
        return $result;
    }
}
