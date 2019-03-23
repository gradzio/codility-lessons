<?php

namespace Tests;

use Lessons\Lesson5\PassingCars;
use PHPUnit\Framework\TestCase;

class PassingCarsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new PassingCars();
    }

    public function bigData()
    {
        return array_map(function ($index) {
            return $index % 2 == 1 ? 0 : 1;
        }, range(1, 100000));
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[]], 0
            ],
            [
                [[1]], 0
            ],
            [
                [[0]], 0
            ],
            [
                [[0,1]], 1
            ],
            [
                [[1, 0, 1]], 1
            ],
            [
                [[1, 0, 1, 0, 1]], 3
            ],
            [
                [$this->bigData()], -1
            ]
        ];
    }
}
