<?php

namespace Tests;

use Lessons\Lesson1\OddOccurencesInArray;

class OddOccurencesInarrayTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new OddOccurencesInArray();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[]],
                0
            ],
            [
                [[1, 2, 1]],
                2
            ],
            [
                [[1, 2, 1, 1, 2]],
                1
            ],
            [
                [[1, 2, 3, 3, 2, 1, 2]],
                2
            ]
        ];
    }
}
