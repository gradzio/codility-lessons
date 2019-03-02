<?php

include('OddOccurencesInArray.php');

class OddOccurencesInarrayTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @dataProvider arrayProvider
     */
    public function shouldReturnSingleItem($array, $expected)
    {
        $this->assertSame(solution($array), $expected);
    }

    public function arrayProvider()
    {
        return [
            [
                [1, 2, 1],
                2
            ],
            [
                [1, 2, 1, 1, 2],
                1
            ],
            [
                [1, 2, 3, 3, 2, 1, 2],
                2
            ]
        ];
    }
}