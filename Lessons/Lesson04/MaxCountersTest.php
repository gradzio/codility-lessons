<?php

namespace Tests;

use Lessons\Lesson4\MaxCounters;
use PHPUnit\Framework\TestCase;

class MaxCountersTest extends TestCase
{
    use TestsAcceptance, TestsPerformance;

    protected function setUp(): void
    {
        $this->fixture = new MaxCounters();
    }

    public function performanceProvider(): array
    {
        $size = 2120;
        return [
            [
                [$size, array_fill(1, $size, rand(1, $size)), array_fill(1, $size, 1)], 0.06
            ]
        ];
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [1, [1]], [1]
            ],
            [
                [1, [1, 1]], [2]
            ],
            [
                [2, [1, 2]], [1, 1]
            ],
            [
                [2, [1, 2, 1]], [2, 1]
            ],
            [
                [2, [2, 2]], [0, 2]
            ],
            [
                [1, [2]], [0]
            ],
            [
                [1, [1, 2]], [1]
            ],
            [
                [2, [3]], [0, 0]
            ],
            [
                [2, [1, 3]], [1, 1]
            ],
            [
                [2, [1, 3, 1]], [2, 1]
            ],
            [
                [3, [1, 4, 1]], [2, 1, 1]
            ]
        ];
    }
}
