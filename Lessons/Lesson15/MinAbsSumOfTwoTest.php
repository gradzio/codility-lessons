<?php

namespace Tests;

use Lessons\Lesson15\MinAbsSumOfTwo;
use PHPUnit\Framework\TestCase;

class MinAbsSumOfTwoTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MinAbsSumOfTwo();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[0]], 0
            ],
            [
                [[0, 1]], 0
            ],
            [
                [[1, 5, 9, 0, 10, 9]], 0
            ],
            [
                [[-1, 2, 1]], 0
            ],
            [
                [[-5, -4, -3, 0, 1, 2, 4, 6]], 0
            ],
            [
                [[-10, -8, 3, 4, 5]], 3
            ],
            [
                [[-10, -5, -9, -3]], 6
            ]
        ];
    }
}
