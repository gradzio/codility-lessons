<?php

namespace Tests;

use Lessons\Lesson1\CyclicRotation;
use PHPUnit\Framework\TestCase;

class CyclicRotationTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CyclicRotation();
    }

    /**
     * @test
     * @dataProvider indicesProvider
     */
    public function shouldCalculateShift($i, $arrayLength, $shiftBy, $expectedIndex)
    {
        $this->assertSame($this->fixture->calculateShiftedIndex($i, $arrayLength, $shiftBy), $expectedIndex);
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [[1, 2, 3, 4], 0],
                [1, 2, 3, 4]
            ],
            [
                [[1], 1],
                [1]
            ],
            [
                [[1, 2, 3, 4, 5, 6, 7, 8, 9], 9],
                [1, 2, 3, 4, 5, 6, 7, 8, 9]
            ],
            [
                [[], 1],
                []
            ],
            [
                [[1, 2, 3], 1],
                [3, 1, 2]
            ],
            [
                [[1, 2, 3], 2],
                [2, 3, 1]
            ],
            [
                [[1, 2, 3, 4, 5, 6, 7], 3],
                [5, 6, 7, 1, 2, 3, 4]
            ]
        ];
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
}
