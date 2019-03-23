<?php

namespace Tests;

use Lessons\Lesson8\Dominator;
use PHPUnit\Framework\TestCase;

class DominatorTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Dominator();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[]], -1
            ],
            [
                [[9]], 0
            ],
            [
                [[1, 1, 1]], 0
            ],
            [
                [[1, 2, 1]], 0
            ],
            [
                [[1, 1, 2, 2, 3]], -1
            ],
            [
                [[3, 4, 3, 2, 3, -1, 3, 3]], 0
            ]
        ];
    }
}
