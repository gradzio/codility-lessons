<?php

namespace Lesson12;

class ChocolatesByNumbers
{
    public function solution(int $N, int $M): int
    {
        if ($N == 1) {
            return 1;
        }

        $loops = $this->gcd($N, $M, 1);

        return $N / $loops;
    }

    private function gcd($a, $b, $res)
    {
        if ($a == $b) {
            return $res * $a;
        } elseif ($a % 2 === 0 && $b % 2 === 0) {
            return $this->gcd($a / 2, $b / 2, 2 * $res);
        } elseif ($a % 2 === 0) {
            return $this->gcd($a / 2, $b, $res);
        } elseif ($b % 2 === 0) {
            return $this->gcd($a, $b / 2, $res);
        } elseif ($a > $b) {
            return $this->gcd($a - $b, $b, $res);
        } else {
            return $this->gcd($a, $b - $a, $res);
        }
    }
}
