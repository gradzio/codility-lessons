<?php

namespace Tests;

use Lessons\Lesson5\PassingCars;

class PassingCarsTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new PassingCars();
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
