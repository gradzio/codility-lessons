<?php

namespace Tests;

use Lessons\Lesson10\Peaks;
use PHPUnit\Framework\TestCase;

class PeaksTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Peaks();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 0
            ],
            [
                [[0, 1, 0, 0, 1, 0]], 2
            ],
            [
                [[0, 1, 0, 1, 0, 0, 1, 0]], 2
            ],
            [
                [array_fill(0, 1000, 0)], 0
            ],
            [
                [[0, 1, 0, 0, 1, 0, 0, 1, 0]], 3
            ],
            [
                [[0, 2, 1, 1, 1, 1, 2, 0]], 2
            ]
        ];
    }
}
