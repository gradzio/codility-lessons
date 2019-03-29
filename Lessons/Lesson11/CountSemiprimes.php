<?php

namespace Lesson11;

class CountSemiprimes
{
    public function solution(int $N, array $P, array $Q): array
    {
        $primes = $this->getPrimes($N);

        $allNumbers = $this->getSubPrimesOffset($primes, $N);

        return $this->getSubPrimeCounts($P, $Q, $allNumbers);
    }

    private function getPrimes(int $N): array
    {
        $start = 2;
        $primes = range($start, ceil($N / $start));

        for ($i = $start; $i * $i <= $N; $i++) {
            for ($k = $i * $i; $k <= $N; $k += $i) {
                unset($primes[$k-$start]);
            }
        }
        return $primes;
    }

    private function getSubPrimesOffset($primes, $N): array
    {
        $allNumbers = array_fill(0, $N + 1, 0);
        $idx = 0;
        foreach ($primes as $prime1) {
            if ($prime1 * $prime1 > $N) {
                break;
            }
            $subslice = array_slice($primes, $idx);
            foreach ($subslice as $prime2) {
                if ($prime1 * $prime2 > $N) {
                    break;
                }
                $allNumbers[$prime1 * $prime2] = 1;
            }
            $idx++;
        }

        for ($a = 1; $a < count($allNumbers); $a++) {
            $allNumbers[$a] += $allNumbers[$a-1];
        }
        return $allNumbers;
    }

    private function getSubPrimeCounts($P, $Q, $allNumbers): array
    {
        return array_map(function ($m) use ($P, $Q, $allNumbers) {
            return $allNumbers[$Q[$m]] - $allNumbers[$P[$m] - 1];
        }, array_keys($Q));
    }
}
