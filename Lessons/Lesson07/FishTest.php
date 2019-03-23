<?php

namespace Tests;

use Lessons\Lesson7\Fish;
use PHPUnit\Framework\TestCase;

class FishTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Fish();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1], [0]], 1
            ],
            [
                [[1, 2], [1, 0]], 1
            ],
            [
                [[1, 2, 3], [1, 0, 0]], 2
            ],
            [
                [[1, 2, 3], [1, 0, 1]], 2
            ],
            [
                [[1, 2, 3, 4], [1, 0, 1, 1]], 3
            ],
            [
                [[5, 1, 2], [1, 1, 0]], 1
            ],
            [
                [[5, 1, 2, 6], [1, 1, 0, 0]], 1
            ]
        ];
    }
}
