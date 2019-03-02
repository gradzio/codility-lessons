<?php

namespace Tests;

use Lessons\Lesson3\PermMissingElem;
use PHPUnit\Framework\TestCase;

class PermMissingElemTest extends TestCase
{
    /**
     * @test
     * @dataProvider acceptanceProvider
     */
    public function shouldPassAcceptanceTesting($A, $expected)
    {
        $fixture = new PermMissingElem();

        $actual = $fixture->solution($A);

        $this->assertEquals($expected, $actual);
    }

    public function acceptanceProvider()
    {
        return [
            [
                [2, 3, 1, 5],
                4
            ],
            [
                [1, 3],
                2
            ],
            [
                [1, 4, 5, 6, 2],
                3
            ],
            [
                [1, 2, 3, 4, 6],
                5
            ],
            [
                [2, 3, 4, 5],
                1
            ],
            [
                [1, 2, 3, 4, 6],
                5
            ],
            [
                [1],
                2
            ]
        ];
    }
}