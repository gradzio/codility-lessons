<?php

namespace Tests;

use Lessons\Lesson9\MaxSliceSum;

class MaxSliceSumTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new MaxSliceSum();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[5]], 5
            ],
            [
                [[1,2]], 3
            ],
            [
                [[1, 5, -10]], 6
            ],
            [
                [[-10, -5, 10, 0]], 10
            ],
            [
                [[-10, -5, -3]], -3
            ],
            [
                [[3, 2, -6, 4, 0]], 5
            ]
        ];
    }
}
