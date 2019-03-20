<?php

namespace Tests;

use Lessons\Lesson8\Dominator;

class DominatorTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new Dominator();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[]], -1
            ],
            [
                [[9]], 0
            ],
            [
                [[1, 1, 1]], 0
            ],
            [
                [[1, 2, 1]], 0
            ],
            [
                [[1, 1, 2, 2, 3]], -1
            ],
            [
                [[3, 4, 3, 2, 3, -1, 3, 3]], 0
            ]
        ];
    }
}
