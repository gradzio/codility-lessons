<?php

namespace Tests;

use Lessons\Lesson8\EquiLeader;
use PHPUnit\Framework\TestCase;

class EquiLeaderTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new EquiLeader();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 0
            ],
            [
                [[1, 0]], 0
            ],
            [
                [[1, 0, 2]], 0
            ],
            [
                [[1, 1]], 1
            ],
            [
                [[1, 0, 1, 1, 1]], 3
            ],
            [
                [[0, 1, 1, 1, 0, 1, 1, 0]], 2
            ],
            [
                [[4, 3, 4, 4, 4, 2]], 2
            ]
        ];
    }
}
