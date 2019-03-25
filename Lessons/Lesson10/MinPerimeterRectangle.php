<?php

namespace Lessons\Lesson10;

class MinPerimeterRectangle
{
    public function solution(int $N): int
    {
        for ($a = ceil(sqrt($N)); $a > 1; $a--) {
            if ($N % $a > 0) {
                continue;
            }
            $b = $N / $a;
            if ($b * $a == $N) {
                return $this->getPerimeter($a, $b);
            }
        }

        return $this->getPerimeter(1, $N);
    }

    private function getPerimeter($a, $b): int
    {
        return 2 * ($a + $b);
    }
}