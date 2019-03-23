<?php

namespace Tests;

use Lessons\Lesson4\PermCheck;
use PHPUnit\Framework\TestCase;

class PermCheckTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new PermCheck();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[0, 1]],
                0
            ],
            [
                [[1, 4]],
                0
            ],
            [
                [[1,2,3,5]],
                0
            ],
            [
                [[1,4,2]],
                0
            ],
            [
                [[1, 3, 3, 4]],
                0
            ],
            [
                [[1,2,3]],
                1
            ],
            [
                [[3,2,1]],
                1
            ],
            [
                [[1,3,2]],
                1
            ]
        ];
    }
}
