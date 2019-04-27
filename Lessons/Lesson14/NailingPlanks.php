<?php

namespace Lessons\Lesson14;

class NailingPlanks
{
    public function solution(array $A, array $B, array $C): int
    {
        $planks = [];
        for ($i = 0; $i < count($A); $i++) {
            $planks[] = ['start' => $A[$i], 'end' => $B[$i]];
        }

        asort($C);
        $nails = [];
        foreach ($C as $key => $value) {
            $nails[] = [$key, $value];
        }

        $result = 0;
        foreach ($planks as $plank) {
            $nailPos = $this->foundNailPos($nails, $plank);
            if ($nailPos == -1) {
                return -1;
            }
            $nailCount = $nails[$nailPos][0];

            while ($nailPos < count($nails) && $nails[$nailPos][1] <= $plank['end']) {
                $nailCount = min($nailCount, $nails[$nailPos][0]);
                if ($nailCount <= $result) {
                    break;
                }
                $nailPos += 1;
            }
            $result = max($result, $nailCount);
        }

        return $result + 1;
    }
    private function foundNailPos(array $sortedNails, array $plank): int
    {
        $N = count($sortedNails);
        $min = 0;
        $max = $N - 1;
        $pos = -1;
        while ($min <= $max) {
            $mid = round(($max + $min) / 2);
            $proposedNailPos = $sortedNails[$mid][1];
            if ($proposedNailPos >= $plank['start'] && $proposedNailPos <= $plank['end']) {
                $max = $mid -1;
                $pos = $mid;
            } elseif ($proposedNailPos > $plank['end']) {
                $max = $mid - 1;
            } elseif ($proposedNailPos < $plank['start']) {
                $min = $mid + 1;
            }
        }
        return $pos;
    }
}
