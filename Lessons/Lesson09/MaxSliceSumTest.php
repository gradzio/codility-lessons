<?php

namespace Tests;

use Lessons\Lesson9\MaxSliceSum;
use PHPUnit\Framework\TestCase;

class MaxSliceSumTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MaxSliceSum();
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
