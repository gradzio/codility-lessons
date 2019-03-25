<?php

namespace Lessons\Lesson10;

class Peaks
{
    public function solution(array $A): int
    {
        $arrayLength = count($A);
        if ($arrayLength < 3) {
            return 0;
        }

        $peaks = [];

        for ($i = 1; $i < $arrayLength - 1; $i++) {
            if ($A[$i-1] < $A[$i] && $A[$i] > $A[$i+1]) {
                $peaks[] = $i;
            }
        }

        if (count($peaks) == 0) {
            return 0;
        }

        for ($size = count($peaks); $size > 0; $size--) {
            if ($arrayLength % $size == 0) {
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
                if ($foundCount == $size) {
                    return $size;
                }
            }
        }

        return 0;
    }
}
