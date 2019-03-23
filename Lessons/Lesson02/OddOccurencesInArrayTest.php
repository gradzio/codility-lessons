<?php

namespace Tests;

use Lessons\Lesson1\OddOccurencesInArray;
use PHPUnit\Framework\TestCase;

class OddOccurencesInarrayTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new OddOccurencesInArray();
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
