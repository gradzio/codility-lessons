<?php

namespace Tests;

use Lessons\Lesson17\MinAbsSum;
use PHPUnit\Framework\TestCase;

class MinAbsSumTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MinAbsSum();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[]], 0
            ],
            [
                [[1, 2, 5]], 2
            ],
            [
                [[1, 5, 2, -2]], 0
            ],
            [
                [[-10, 10, 10, -40, 20]], 10
            ],
            [
                [[-1, -1, -1]], 1
            ]
        ];
    }
}
