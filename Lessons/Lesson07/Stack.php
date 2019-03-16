<?php

namespace Lessons\Lesson7;

class Stack implements \Countable
{
    private $items = [];

    public function add($value): void
    {
        $this->items[] = $value;
    }

    public function peek()
    {
        return $this->items[$this->count() - 1];
    }

    public function remove()
    {
        return array_pop($this->items);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function isEmpty(): bool
    {
        return count($this->items) === 0;
    }
}
