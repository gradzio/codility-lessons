<?php

namespace Tests;

use Lessons\Lesson3\TapeEquilibrium;
use PHPUnit\Framework\TestCase;

class TapeEquilibriumTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new TapeEquilibrium();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1, 2]],
                1
            ],
            [
                [[1, -3, 2]],
                2
            ],
            [
                [[1, 2, 4, 2]],
                3
            ],
            [
                [[3, 1, 2, 4, 3]],
                1
            ]
        ];
    }
}
