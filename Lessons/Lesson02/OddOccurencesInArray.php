<?php

namespace Lessons\Lesson1;

class OddOccurencesInArray
{
    public function solution($A): int
    {
        foreach (array_count_values($A) as $number => $count) {
            if ($count % 2 === 1) {
                return $number;
            }
        }

        return 0;
    }
}
