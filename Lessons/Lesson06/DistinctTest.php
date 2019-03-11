<?php

namespace Tests;

use Lessons\Lesson6\Distinct;

class DistinctTest extends AcceptanceTest
{

    protected function makeFixture()
    {
        return new Distinct();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[0]], 1,
            ],
            [
                [[0,1]], 2
            ],
            [
                [[0,0]], 1
            ],
            [
                [[0,1, 1]], 2
            ],
            [
                [[0,1, 2]], 3
            ]
        ];
    }
}
