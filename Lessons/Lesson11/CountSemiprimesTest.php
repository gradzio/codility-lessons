<?php

namespace Tests;

use Lesson11\CountSemiprimes;
use PHPUnit\Framework\TestCase;

class CountSemiprimesTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CountSemiprimes();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [1, [1], [1]], [0]
            ],
            [
                [26, [1, 4, 16], [26, 10, 20]], [10, 4, 0]
            ]
        ];
    }
}
