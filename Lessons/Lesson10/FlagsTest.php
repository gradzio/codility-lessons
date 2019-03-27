<?php

namespace Tests;

use Lessons\Lesson10\Flags;
use PHPUnit\Framework\TestCase;

class FlagsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Flags();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 0
            ],
            [
                [[0, 1, 0]], 1
            ],
            [
                [[0, 1, 0, 1, 0]], 2
            ],
            [
                [[0, 1, 0, 0, 1, 0]], 2
            ],
            [
                [[0, 1, 0, 1, 0, 1, 0]], 2
            ],
            [
                [[0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0]], 3
            ],
            [
                [[0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0]], 4
            ]
        ];
    }
}
