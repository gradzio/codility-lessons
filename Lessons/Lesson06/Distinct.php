<?php

namespace Lessons\Lesson6;

class Distinct
{
    public function solution($A): int
    {
        return count(array_unique($A));
    }
}
