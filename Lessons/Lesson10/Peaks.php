<?php

namespace Lessons\Lesson10;

class Peaks
{
    public function solution(array $A): int
    {
        $arrayLength = count($A);

        $peaks = $this->getPeaks($A, $arrayLength);

        if (count($peaks) == 0) {
            return 0;
        }

        for ($size = count($peaks); $size > 1; $size--) {
            if ($arrayLength % $size == 0) {
                $foundCount = $this->getPeaksInBlock($peaks, $size, $arrayLength);
                if ($foundCount == $size) {
                    return $size;
                }
            }
        }

        return 1;
    }

    private function getPeaks(array $A, int $arrayLength): array
    {
        $peaks = [];

        for ($i = 1; $i < $arrayLength - 1; $i++) {
            if ($A[$i-1] < $A[$i] && $A[$i] > $A[$i+1]) {
                $peaks[] = $i;
            }
        }
        return $peaks;
    }

    private function getPeaksInBlock($peaks, $size, $arrayLength): int
    {
        $blockSize = $arrayLength / $size;
        $found = array_fill(0, $size, false);
        $foundCount = 0;
        foreach ($peaks as $peak) {
            $block = floor($peak / $blockSize);
            if ($found[$block] == false) {
                $found[$block] = true;
                $foundCount += 1;
            }
        }
        return $foundCount;
    }
}
