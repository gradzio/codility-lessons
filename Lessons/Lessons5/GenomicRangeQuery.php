<?php

namespace Lessons\Lesson5;

class GenomicRangeQuery
{
    private $mapper = ['A' => 1, 'C' => 2, 'G' => 3, 'T' => 4];
    public function solution($S, $P, $Q): array
    {
        $return = [];
        for ($i = 0; $i < count($P); $i++) {
            $mString = substr($S, $P[$i], $Q[$i] - $P[$i] + 1);
            $return[] = $this->getValue($mString);
        }
        return $return;
    }

    public function getValue($string)
    {
        foreach ($this->mapper as $char => $value) {
            if (strpos($string, $char) !== false) {
                return $value;
            }
        }
    }
}
