<?php

namespace Lessons\Lesson17;

class MinAbsSum
{
    public function solution(array $A): int
    {
        $N = count($A);
        if ($N == 0) {
            return 0;
        }
        $M = 0;

        $A = array_map("abs", $A);
        $M = max($A);

        $S = array_sum($A);
        $count = array_fill(0, $M + 1, 0);

        for ($i = 0; $i < $N; $i++) {
            $count[$A[$i]] += 1;
        }

        $dp = array_fill(0, $S + 1, -1);
        $dp[0] = 0;
        for ($a = 1; $a < $M + 1; $a++) {
            if ($count[$a] > 0) {
                for ($j = 0; $j < $S; $j++) {
                    if ($dp[$j] >= 0) {
                        $dp[$j] = $count[$a];
                    } elseif ($j >= $a && $dp[$j - $a] > 0) {
                        $dp[$j] = $dp[$j - $a] - 1;
                    }
                }
            }
        }

        $result = $S;

        for ($i = 0; $i < $S / 2 + 1; $i++) {
            if ($dp[$i] >= 0) {
                $result = min($result, $S - 2 * $i);
            }
        }

        return abs($result);
    }
}
