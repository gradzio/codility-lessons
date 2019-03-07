<?php

namespace Tests;

use Lessons\Lesson4\PermCheck;

class PermCheckTest extends AcceptanceTest
{
    public function acceptanceProvider(): array
    {
        return [
            [
                [[0, 1]],
                0
            ],
            [
                [[1, 4]],
                0
            ],
            [
                [[1,2,3,5]],
                0
            ],
            [
                [[1,4,2]],
                0
            ],
            [
                [[1,2,3]],
                1
            ],
            [
                [[3,2,1]],
                1
            ],
            [
                [[1,3,2]],
                1
            ]
        ];
    }

    protected function makeFixture()
    {
        return new PermCheck();
    }
}
