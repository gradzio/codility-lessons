<?php

namespace Tests;

use Lessons\Lesson10\CountFactors;
use PHPUnit\Framework\TestCase;

class CountFactorsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CountFactors();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [1], 1
            ],
            [
                [2], 2
            ],
            [
                [3], 2
            ],
            [
                [4], 3
            ],
            [
                [5], 2
            ],
            [
                [10], 4
            ],
            [
                [16], 5
            ],
            [
                [24], 8
            ],
            [
                [36], 9
            ],
            [
                [41], 2
            ],
            [
                [42], 8
            ]
        ];
    }
}
