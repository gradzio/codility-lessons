<?php

namespace Tests;

use Lessons\Lesson9\MaxProfit;

class MaxProfitTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new MaxProfit();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[]], 0
            ],
            [
                [[10101]], 0
            ],
            [
                [[10, 5, 10, 20]], 15
            ],
            [
                [[23171, 21011, 21123, 21366, 21013, 21367]], 356
            ]
        ];
    }
}