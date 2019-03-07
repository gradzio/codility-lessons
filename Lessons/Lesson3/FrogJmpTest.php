<?php

namespace Tests;

use \PHPUnit\Framework\TestCase;

use Lessons\Lesson3\FrogJmp;

class FrogJmpTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new FrogJmp();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [1, 2, 1],
                1
            ],
            [
                [10, 85, 30],
                3
            ]
        ];
    }
}
