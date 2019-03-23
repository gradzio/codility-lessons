<?php

namespace Tests;

use Lessons\Lesson4\MissingInteger;
use PHPUnit\Framework\TestCase;

class MissingIntegerTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MissingInteger();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[-1, -3]], 1
            ],
            [
                [[]], 1
            ],
            [
                [[1,2,3]], 4
            ],
            [
                [[-1,-2,1]], 2
            ],
            [
                [[-1,2,1,3,2,2,2,5]], 4
            ]
        ];
    }
}
