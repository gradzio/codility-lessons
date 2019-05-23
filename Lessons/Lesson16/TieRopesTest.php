<?php

namespace Tests;

use Lessons\Lesson16\TieRopes;
use PHPUnit\Framework\TestCase;

class TieRopesTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new TieRopes();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [10, [5]], 0
            ],
            [
                [5, [5]], 1
            ],
            [
                [10, [5, 3, 2, 1]], 1
            ],
            [
                [4, [1, 2, 3, 4, 1, 1, 3]], 3
            ]
        ];
    }
}
