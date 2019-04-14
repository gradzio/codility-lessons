<?php

namespace Lesson11;

class CountNonDivisible
{
    public function solution(array $A): array
    {
        $arrayLength = count($A);
        if ($arrayLength == 1) {
            return [0];
        }

        $counterMap = array_fill_keys(range(1, $arrayLength * 2), 0);

        foreach ($A as $element) {
            $counterMap[$element] += 1;
        }

        $answer = array_fill_keys(range(1, $arrayLength * 2), 0);

        $result = [];
        for ($i = 1; $i <= $arrayLength * 2; $i++) {
            $num = $counterMap[$i];

            if ($num == 0) {
                continue;
            }

            for ($j = $i; $j <= $arrayLength * 2; $j += $i) {
                $answer[$j] -= $num;
            }
        }

        for ($i = 0; $i < $arrayLength; $i++) {
            $result[$i] = $arrayLength + $answer[$A[$i]];
        }

        return $result;
    }
}
