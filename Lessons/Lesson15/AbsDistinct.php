<?php

namespace Lessons\Lesson15;

class AbsDistinct
{
    public function solution(array $A): int
    {
        $seen = [];
        foreach ($A as $item) {
            $seen[abs($item)] = 1;
        }

        return count($seen);
    }
}
