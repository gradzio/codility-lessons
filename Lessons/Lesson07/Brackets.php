<?php

namespace Lessons\Lesson7;

class Brackets
{
    private $openCloseMapper = [')' => '(', '}' => '{', ']' => '['];

    public function solution(string $S): int
    {
        $length = strlen($S);
        if ($length == 0) {
            return 1;
        }
        if ($length % 2 == 1) {
            return 0;
        }

        $stack = new Stack();
        for ($i = 0; $i < $length; $i++) {
            $char = $S[$i];
            if ($char == '(' || $char == '{' || $char == '[') {
                $stack->add($char);
                continue;
            }
            if ($stack->isEmpty()) {
                return 0;
            }
            if ($stack->remove() !== $this->openCloseMapper[$char]) {
                return 0;
            }
        }

        return $stack->isEmpty() ? 1 : 0;
    }
}
