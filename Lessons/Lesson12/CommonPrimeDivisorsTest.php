<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Lesson12\CommonPrimeDivisors;

class CommonPrimeDivisorsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CommonPrimeDivisors();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[2, 1, 2], [1, 2, 2]], 1
            ],
            [
                [[15, 10, 3], [75, 30, 5]], 1
            ],
            [
                [[3, 9, 20, 11], [9, 81, 5, 13]], 2
            ]
        ];
    }
}
