<?php

namespace Lessons\Lesson5;

class CountDiv
{
    public function solution($A, $B, $K): int
    {
        $base = 1;
        if ($A == 0) {
            $from = $K;
            $base += 1;
        } elseif ($A % $K == 0) {
            $from = $A;
        } else {
            $from = $A + $K - ($A % $K);
        }
        $to = $B - ($B % $K);
        if ($from == $to) {
            return $base;
        }

        return (($to - $from) / $K) + $base;
    }
}
