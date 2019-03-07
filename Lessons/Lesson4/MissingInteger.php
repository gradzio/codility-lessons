<?php

namespace Lessons\Lesson4;

class MissingInteger
{
    public function solution($A)
    {
        $vals = array_fill_keys(range(1, count($A)+1), 0);
        foreach ($A as $number) {
            unset($vals[$number]);
        }
        return array_keys($vals)[0];
    }
}
