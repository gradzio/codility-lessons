<?php

namespace Tests;

use \PHPUnit\Framework\TestCase;

use Lessons\Lesson3\FrogJmp;

class FrogJmpTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new FrogJmp();
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
