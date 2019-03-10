<?php

namespace Lessons\Lesson5;

class PassingCars
{
    private $MAX_PAIRS = 1000000000;
    public function solution($A): int
    {
        $pairMultiplier = 0;
        $pairCounter = 0;
        foreach ($A as $isWest) {
            if ($isWest == 0) {
                $pairMultiplier++;
            } elseif ($isWest == 1) {
                $pairCounter += $pairMultiplier;
            }
            if ($pairCounter > $this->MAX_PAIRS) {
                return -1;
            }
        }
        return $pairCounter;
    }
}
