<?php

namespace Lesson12;

class CommonPrimeDivisors
{
    public function solution(array $A, array $B): int
    {
        $Z = count($A);
        $kFound = 0;
        for ($K = 0; $K < $Z; $K++) {
            $aK = $A[$K];
            $bK = $B[$K];
            $x = $this->gcd($aK, $bK);
            $smallestFactorA = $this->smallestFactor($aK, $x);
            if ($smallestFactorA !== 1) {
                continue;
            }
            $smallestFactorB = $this->smallestFactor($bK, $x);
            if ($smallestFactorB !== 1) {
                continue;
            }
            $kFound++;
        }

        return $kFound;
    }

    private function smallestFactor($num, $x)
    {
        $d = INF;
        while ($d > 1) {
            $d = $this->gcd($x, $num, 1);
            $num /= $d;
        }
        return $num;
    }

    private function gcd($x, $y)
    {
        if ($x % $y === 0) {
            return $y;
        } else {
            return $this->gcd($y, $x % $y);
        }
    }
}
