<?php

namespace Lessons\Lesson10;

class CountFactors
{
    public function solution(int $N): int
    {
        if ($N < 3) {
            return $N;
        }
        $counter = 0;
        $incrementer = $N % 2 === 0 ? 1 : 2;
        for ($i = 1; $i <= sqrt($N); $i += $incrementer) {
            if ($N % $i == 0) {
                $counter++;
                if ($i != $N / $i) {
                    $counter++;
                }
            }
        }

        return $counter;
    }
}
