<?php

namespace Tests;

use Lessons\Lesson6\Distinct;
use PHPUnit\Framework\TestCase;

class DistinctTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Distinct();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[0]], 1,
            ],
            [
                [[0,1]], 2
            ],
            [
                [[0,0]], 1
            ],
            [
                [[0,1, 1]], 2
            ],
            [
                [[0,1, 2]], 3
            ]
        ];
    }
}
