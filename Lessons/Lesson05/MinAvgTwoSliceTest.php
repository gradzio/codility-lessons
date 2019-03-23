<?php

namespace Tests;

use Lessons\Lesson5\MinAvgTwoSlice;
use PHPUnit\Framework\TestCase;

class MinAvgTwoSliceTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MinAvgTwoSlice();
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
