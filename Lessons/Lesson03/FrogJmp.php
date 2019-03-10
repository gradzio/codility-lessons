<?php

namespace Lessons\Lesson3;

class FrogJmp
{
    public function solution(int $X, int $Y, int $D): int
    {
        return ceil(($Y - $X) / $D);
    }
}
