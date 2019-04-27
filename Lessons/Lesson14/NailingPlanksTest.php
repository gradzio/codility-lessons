<?php

namespace Tests;

use Lessons\Lesson14\NailingPlanks;
use PHPUnit\Framework\TestCase;

class NailingPlanksTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new NailingPlanks();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[0, 10], [5, 15], [0, 30]], -1
            ],
            [
                [[0, 2], [1, 3], [3, 1, 5]], 2
            ],
            [
                [[1, 4, 5, 8], [4, 5, 9, 10], [4, 6, 7, 10, 2]], 4
            ]
        ];
    }
}
