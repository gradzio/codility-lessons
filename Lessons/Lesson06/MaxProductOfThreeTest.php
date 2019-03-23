<?php

namespace Tests;

use Lessons\Lesson6\MaxProductOfThree;
use PHPUnit\Framework\TestCase;

class MaxProductOfThreeTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MaxProductOfThree();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1, 3, 5]], 15
            ],
            [
                [[-1, 1, 2, 3]], 6
            ],
            [
                [[-3, 0, 1, 2]], 0
            ],
            [
                [[-5, -4, 1, 2, 3]], 60
            ],
            [
                [[-100, -1, 35, 40, 58]], 81200
            ],
            [
                [[-10, -3, -2, 1, 6, 8]], 240
            ]
        ];
    }
}
