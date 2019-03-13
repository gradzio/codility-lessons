<?php

namespace Tests;

use Lessons\Lesson6\NumberOfDiscIntersections;

class NumberOfDiscIntersectionsTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new NumberOfDiscIntersections();
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
                [[2, 1]], 1
            ],
            [
                [[1,1,1]], 3
            ],
            [
                [[1, 5, 2, 1, 4, 0]], 11
            ],
            [
                [array_fill(0, 4500, 4500)], -1
            ]
        ];
    }
}
