<?php

namespace Tests;

use Lessons\Lesson10\MinPerimeterRectangle;
use PHPUnit\Framework\TestCase;

class MinPerimeterRectangleTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MinPerimeterRectangle();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [1], 4
            ],
            [
                [2], 6
            ],
            [
                [9], 12
            ],
            [
                [30], 22
            ],
            [
                [48], 28
            ],
            [
                [101], 204
            ],
            [
                [1234], 1238
            ],
            [
                [4564320], 8552
            ],
            [
                [15486451], 30972904
            ],
            [
                [982451653], 1964903308
            ],
            [
                [1000000000], 126500
            ]
        ];
    }
}