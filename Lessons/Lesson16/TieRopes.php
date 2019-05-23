<?php

namespace Lessons\Lesson16;

class TieRopes
{
    public function solution(int $K, array $A): int
    {
        $tempRope = 0;
        $maxRopeCount = 0;
        foreach ($A as $rope) {
            $tempRope += $rope;
            if ($tempRope >= $K) {
                $maxRopeCount++;
                $tempRope = 0;
            }
        }

        return $maxRopeCount;
    }
}
