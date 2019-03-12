<?php

namespace Tests;

use Lessons\Lesson6\Triangle;

class TriangleTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new Triangle();
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
                [[1, 2]], 0
            ],
            [
                [[1, 2, 3]], 0
            ],
            [
                [[10, 5, 8]], 1
            ],
            [
                [[2,2,3]], 1
            ],
            [
                [[-1, 0, -100, 3, 2, 1]], 0
            ]
        ];
    }
}
