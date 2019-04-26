<?php

namespace Tests;

use Lessons\Lesson14\MinMaxDivision;
use PHPUnit\Framework\TestCase;

class MinMaxDivisionTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MinMaxDivision();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [1, 5, [5]], 5
            ],
            [
                [10, 5, [1, 2, 3, 4, 5]], 5
            ],
            [
                [2, 10, [4, 4]], 4
            ],
            [
                [3, 5, [2, 1, 5, 1, 2, 2, 2]], 6
            ]
        ];
    }
}
