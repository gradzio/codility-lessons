<?php

namespace Tests;

use Lessons\Lesson3\PermMissingElem;
use PHPUnit\Framework\TestCase;

class PermMissingElemTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new PermMissingElem();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[2, 3, 1, 5]],
                4
            ],
            [
                [[1, 3]],
                2
            ],
            [
                [[1, 4, 5, 6, 2]],
                3
            ],
            [
                [[1, 2, 3, 4, 6]],
                5
            ],
            [
                [[2, 3, 4, 5]],
                1
            ],
            [
                [[1, 2, 3, 4, 6]],
                5
            ],
            [
                [[1]],
                2
            ],
            [
                [[1, 2, 3]],
                4
            ]
        ];
    }
}
