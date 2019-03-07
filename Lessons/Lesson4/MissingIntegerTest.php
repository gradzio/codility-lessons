<?php

namespace Tests;

use Lessons\Lesson4\MissingInteger;

class MissingIntegerTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new MissingInteger();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[-1, -3]], 1
            ],
            [
                [[]], 1
            ],
            [
                [[1,2,3]], 4
            ],
            [
                [[-1,-2,1]], 2
            ],
            [
                [[-1,2,1,3,2,2,2,5]], 4
            ]
        ];
    }
}
