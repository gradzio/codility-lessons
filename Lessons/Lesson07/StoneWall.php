<?php

namespace Lessons\Lesson7;

class StoneWall
{
    public function solution(array $H): int
    {
        $arrayLength = count($H);
        $blockCount = 0;
        $stack = new Stack();

        if ($arrayLength < 3) {
            return $arrayLength;
        }

        for ($i = 0; $i < count($H); $i++) {
            $nextHeight = $H[$i];
            while (!$stack->isEmpty() && $stack->peek() > $nextHeight) {
                $stack->remove();
            }
            if (!$stack->isEmpty() && $stack->peek() === $nextHeight) {
                continue;
            }

            $stack->add($nextHeight);
            $blockCount++;
        }

        return $blockCount;
    }
}
