<?php

namespace Tests;

use Lessons\Lesson3\TapeEquilibrium;
use PHPUnit\Framework\TestCase;

class TapeEquilibriumTest extends TestCase
{
    /**
     * @test
     * @dataProvider acceptanceProvider
     */
    public function shouldPassAcceptanceTests($A, $expected)
    {
        $fixture = new TapeEquilibrium();

        $actual = $fixture->solution($A);

        $this->assertEquals($expected, $actual);
    }

    public function acceptanceProvider()
    {
        return [
            [
                [1, 2],
                1
            ],
            [
                [1, -3, 2],
                2
            ],
            [
                [1, 2, 4, 2],
                3
            ],
            [
                [3, 1, 2, 4, 3],
                1
            ]
        ];
    }
}