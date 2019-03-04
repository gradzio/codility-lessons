<?php

namespace Lessons\Lesson1;


class BinaryGap
{
    function solution($N)
    {
        if ($N < 0) {
            return 0;
        }
        $binary = decbin($N);
        preg_match_all('/(?=(1[0]+1))/', $binary, $matchedZeros);
        if (count($matchedZeros) == 0 || count($matchedZeros[1]) == 0) {
            return 0;
        }

        return max(array_map(function ($zeros) {
            return strlen($zeros) - 2;
        }, $matchedZeros[1]));
    }
}
