<?php

namespace Lessons\Lesson13;

class FibFrog
{
    public function solution(array $A): int
    {
        $N = count($A);

        $fib = [0, 1];

        while ($fib[count($fib)-1] < $N + 2) {
            $fib[] = ($fib[count($fib)-1] + $fib[count($fib)-2]);
        }

        $paths[] = [
            'positionIndex' => -1,
            'jumpCount' => 0
        ];

        $visited = array_fill(0, $N, false);

        while (count($paths) > 0) {
            $context = array_shift($paths);
            for ($i = count($fib) - 1; $i >= 2; $i--) {
                $jumpLength = $fib[$i];
                $nextPositionIndex = $context['positionIndex'] + $jumpLength;
                if ($nextPositionIndex === $N) {
                    return $context['jumpCount'] + 1;
                }
                if ($nextPositionIndex > $N
                    || $visited[$nextPositionIndex]
                    || $A[$nextPositionIndex] === 0
                ) {
                    continue;
                }
                if ($A[$nextPositionIndex] === 1) {
                    $visited[$nextPositionIndex] = true;
                    $paths[] = ['positionIndex' => $nextPositionIndex, 'jumpCount' => $context['jumpCount'] + 1];
                }
            }
        }

        return -1;
    }
}
