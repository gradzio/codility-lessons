<?php

namespace Tests;

use Lessons\Lesson17\NumberSolitaire;
use PHPUnit\Framework\TestCase;

class NumberSolitaireTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new NumberSolitaire();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[0, 1]], 1
            ],
            [
                [[0, -1, 0]], 0
            ],
            [
                [[1, -2, 0, 9, -1, -2]], 8
            ]
        ];
    }
}
