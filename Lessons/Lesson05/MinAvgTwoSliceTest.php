<?php

namespace Tests;

use Lessons\Lesson5\MinAvgTwoSlice;

class MinAvgTwoSliceTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new MinAvgTwoSlice();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[0, 1, 2]], 0
            ],
            [
                [[0, 1, 0]], 0
            ],
            [
                [[0, 1, 0, 0]], 2
            ],
            [
                [[0, 1, 0, 0, -5, -5]], 4
            ],
            [
                [[10, -1, 2]], 1
            ],
            [
                [[10, 10, -2]], 1
            ],
            [
                [[-3, -5, -8, -4, -10]], 2
            ]
        ];
    }
}
