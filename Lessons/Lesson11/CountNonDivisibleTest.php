<?php

namespace Tests;

use Lesson11\CountNonDivisible;
use PHPUnit\Framework\TestCase;

class CountNonDivisibleTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CountNonDivisible();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1]], [0]
            ],
            [
                [[1, 4]], [1, 0]
            ],
            [
                [[3, 1, 2, 3, 6]], [2, 4, 3, 2, 0]
            ],
            [
                [
                    range(1, 50)
                ],
                [
                    49, 48,48, 47, 48, 46, 48, 46, 47, 46, 48, 44, 48, 46, 46, 45, 48, 44, 48, 44, 46, 46, 48, 42, 47,
                    46, 46, 44, 48, 42, 48, 44, 46, 46, 46, 41, 48, 46, 46, 42, 48, 42, 48, 44, 44, 46, 48, 40, 47, 44
                ]
            ]
        ];
    }
}
