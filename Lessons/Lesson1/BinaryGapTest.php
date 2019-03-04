<?php

namespace Tests;

use Lessons\Lesson1\BinaryGap;

class BinaryGapTest extends AcceptanceTest
{

    public function makeFixture()
    {
        return new BinaryGap();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [328],
                2
            ],
            [
                [bindec('10010001010')],
                3
            ],
            [
                [bindec('1000')],
                0
            ],
            [
                [bindec('10000010000000001')],
                9
            ],
            [
                [bindec('1001')],
                2
            ],
            [
                [bindec('10010')],
                2
            ],
            [
                [bindec('10001')],
                3
            ],
            [
                [bindec('1010')],
                1
            ],
            [
                [bindec('100000010')],
                6
            ],
            [
                [bindec('10000101010101010101001')],
                4
            ]
        ];
    }
}