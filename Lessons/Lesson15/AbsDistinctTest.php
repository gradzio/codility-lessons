<?php

namespace Tests;

use Lessons\Lesson15\AbsDistinct;
use PHPUnit\Framework\TestCase;

class AbsDistinctTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new AbsDistinct();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 1
            ],
            [
                [[1, 1, 1, 1, 1]], 1
            ],
            [
                [[1, 2, 3, 3]], 3
            ],
            [
                [[-1, 0, 1, 2]], 3
            ],
            [
                [[-5, -3, -1, 0, 3, 6]], 5
            ]
        ];
    }
}
