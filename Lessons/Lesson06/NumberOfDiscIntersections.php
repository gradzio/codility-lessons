<?php

namespace Lessons\Lesson6;

class NumberOfDiscIntersections
{
    public function solution($A): int
    {
        if (count($A) < 2) {
            return 0;
        }

        $boundCollection = new BoundCollection(10000000);

        foreach ($A as $x => $r) {
            $boundCollection->add(new Bound($x - $r, true));
            $boundCollection->add(new Bound($x + $r, false));
        }

        $boundCollection->sort();

        return $boundCollection->count();
    }
}

class BoundCollection
{
    private $bounds = [];
    private $maxIntersections;

    public function __construct($maxIntersections)
    {
        $this->maxIntersections = $maxIntersections;
    }

    public function add(Bound $bound)
    {
        $this->bounds[] = $bound;
    }

    public function sort()
    {
        usort($this->bounds, function (Bound $a, Bound $b) {
            if ($a->isEqual($b)) {
                return 0;
            }
            return $a->isSmaller($b) ? -1 : 1;
        });
    }

    public function count()
    {
        $intesectionCount = 0;
        $activeCount = 0;

        foreach ($this->bounds as $bound) {
            if ($bound->isLeft()) {
                $intesectionCount += $activeCount;
                $activeCount++;
            } else {
                $activeCount--;
            }

            if ($intesectionCount > $this->maxIntersections) {
                return -1;
            }
        }

        return $intesectionCount;
    }
}

class Bound
{
    private $types = ['L', 'R'];
    private $x;
    private $type;

    public function __construct(int $x, bool $isLeft)
    {
        $this->x = $x;
        $this->type = $isLeft ? $this->types[0] : $this->types[1];
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function isLeft(): bool
    {
        return $this->type === $this->types[0];
    }

    public function isEqual(Bound $compare): bool
    {
        return $this->x == $compare->getX()
            && $this->type == $compare->getType();
    }

    public function isSmaller(Bound $compare): bool
    {
        return $this->x < $compare->getX()
            || ($this->x == $compare->getX() && $this->isLeft());
    }
}
