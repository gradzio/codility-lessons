<?php

namespace Lessons\Lesson8;

class Dominator
{
    public function solution($A): int
    {
        $arrayLength = count($A);

        if ($arrayLength === 0) {
            return -1;
        }

        if ($arrayLength === 1) {
            return 0;
        }

        asort($A);

        $lastVal = null;
        $valIndexes = [];
        $tempValIndexes = [];

        foreach ($A as $i => $val) {
            if ($lastVal !== $val) {
                if (count($tempValIndexes) > count($valIndexes)) {
                    $valIndexes = $tempValIndexes;
                }
                $tempValIndexes = [];
                $lastVal = $val;
            }
            $tempValIndexes[] = $i;
        }

        if (count($tempValIndexes) > count($valIndexes)) {
            $valIndexes = $tempValIndexes;
        }


        return count($valIndexes) > $arrayLength / 2 ? $valIndexes[0] : -1;
    }
}
