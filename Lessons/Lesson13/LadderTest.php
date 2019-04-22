<?php

namespace Tests;

use Lessons\Lesson13\Ladder;
use PHPUnit\Framework\TestCase;

class LadderTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Ladder();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[0], [0]], [0],
            ],
            [
                [[1], [1]], [1],
            ],
            [
                [[2, 3, 4, 5], [2, 3, 4, 5]], [2, 3, 5, 8]
            ],
            [
                [[4, 4, 5, 5, 1], [3, 2, 4, 3, 1]], [5, 1, 8, 0, 1]
            ]
        ];
    }
}
