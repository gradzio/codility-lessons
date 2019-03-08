<?php

namespace Tests;

use Lessons\Lesson5\CountDiv;

class CountDivTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new CountDiv();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [0, 1, 1], 2
            ],
            [
                [1, 16, 5], 3
            ],
            [
                [0, 16, 5], 4
            ],
            [
                [100, 116, 5], 4
            ],
            [
                [101, 116, 5], 3
            ]
        ];
    }
}
