<?php

namespace Tests;

class CyclicRotationTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->fixture = new \Lessons\Lesson1\CyclicRotation();
    }

    /**
     * @test
     */
    public function shouldReturnSameArrayWhenK0()
    {
        $array = [1, 2, 3, 4];

        $this->assertSame(solution($array, 0), $array);
    }

    /**
     * @test
     */
    public function shouldReturnSameArrayIfArrayLength1()
    {
        $array = [1];

        $this->assertSame(solution($array, 1), $array);
    }

    /**
     * @test
     */
    public function shouldReturnSameArrayIfArrayLengthEqualsK()
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $this->assertSame(solution($array, 9), $array);
    }

    /**
     * @test
     * @dataProvider arrayProvider
     */
    public function shouldShiftCorrectly($array, $k, $expected)
    {
        $this->assertSame(solution($array, $k), $expected);
    }

    /**
     * @test
     * @dataProvider indicesProvider
     */
    public function shouldCalculateShift($i, $arrayLength, $shiftBy, $expectedIndex)
    {
        $this->assertSame(calculateShiftedIndex($i, $arrayLength, $shiftBy), $expectedIndex);
    }

    public function indicesProvider()
    {
        return [
            [
                0,
                2,
                1,
                1
            ],
            [
                1,
                2,
                1,
                0
            ],
            [
                0,
                2,
                2,
                0
            ]
        ];
    }

    public function arrayProvider()
    {
        return [
            [
                [],
                1,
                []
            ],
            [
                [1, 2, 3],
                1,
                [3, 1, 2]
            ],
            [
                [1, 2, 3],
                2,
                [2, 3, 1]
            ],
            [
                [1, 2, 3, 4, 5, 6, 7],
                3,
                [5, 6, 7, 1, 2, 3, 4]
            ]
        ];
    }

}