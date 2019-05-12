<?php

namespace Tests;

use Lessons\Lesson15\CountDistinctSlices;
use PHPUnit\Framework\TestCase;

class CountDistinctSlicesTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CountDistinctSlices();
    }

    public function acceptanceProvider(): array
    {
        $randNumber = rand(1, 1000);
        return [
            [
                [10, [0]], 1
            ],
            [
                [0, array_fill(0, $randNumber, 0)], $randNumber
            ],
            [
                [10, [1, 2, 3, 4]], 10
            ],
            [
                [6, [3, 4, 5, 5, 2]], 9
            ],
            [
                [100000, range(1, 100000)], 1000000000
            ]
        ];
    }
}
