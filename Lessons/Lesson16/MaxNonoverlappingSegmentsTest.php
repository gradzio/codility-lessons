<?php

namespace Tests;

use Lessons\Lesson16\MaxNonoverlappingSegments;
use PHPUnit\Framework\TestCase;

class MaxNonoverlappingSegmentsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MaxNonoverlappingSegments();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[], []], 0
            ],
            [
                [[1], [3]], 1
            ],
            [
                [[1, 5], [3, 7]], 2
            ],
            [
                [[1, 3], [5, 7]], 1
            ],
            [
                [[1, 5, 10], [4, 9, 11]], 3
            ],
            [
                [[1, 3, 7], [5, 6, 8]], 2
            ],
            [
                [[1, 2, 3, 8], [5, 6, 7, 9]], 2
            ],
            [
                [[1, 3, 7, 9, 9], [5, 6, 8, 9, 10]], 3
            ]
        ];
    }
}
