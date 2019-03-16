<?php

namespace Lessons\Lesson7;

class Fish
{
    public function solution($A, $B): int
    {
        $fishCount = 0;
        $downstreamFishes = new Stack();
        for ($i = 0; $i < count($A); $i++) {
            if ($B[$i] == 1) {
                $downstreamFishes->add($A[$i]);
                continue;
            }

            while (!$downstreamFishes->isEmpty()) {
                if ($downstreamFishes->peek() < $A[$i]) {
                    $downstreamFishes->remove();
                    continue;
                }
                break;
            }

            if ($downstreamFishes->isEmpty()) {
                $fishCount++;
            }
        }
        $fishCount += $downstreamFishes->count();
        return $fishCount;
    }
}
