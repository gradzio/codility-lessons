<?php

namespace Tests;

use Lessons\Lesson13\FibFrog;
use PHPUnit\Framework\TestCase;

class FibFrogTest extends TestCase
{
    use TestsAcceptance;


    protected function setUp(): void
    {
        $this->fixture = new FibFrog();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[0, 0, 0]], -1
            ],
            [
                [[0]], 1
            ],
            [
                [[0, 0, 1]], 2
            ],
            [
                [[1, 0, 1, 0, 1, 0, 0, 0, 0, 0]], 2
            ],
            [
                [[0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0]], 3
            ]
        ];
    }
}
