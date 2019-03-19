<?php

namespace Tests;

use Lessons\Lesson7\StoneWall;

class StoneWallTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new StoneWall();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 1
            ],
            [
                [[5, 4, 3]], 3
            ],
            [
                [[8, 8, 8, 8]], 1
            ],
            [
                [[8, 8, 9, 8, 8]], 2
            ],
            [
                [[8, 8, 5, 7, 9, 8, 7, 4, 8]], 7
            ]
        ];
    }
}
