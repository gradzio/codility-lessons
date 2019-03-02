<?php

namespace Tests;

use \PHPUnit\Framework\TestCase;

use Lessons\Lesson3\FrogJmp;

class FrogJmpTest extends TestCase
{
    protected function setUp(): void
    {
        $this->fixture = new FrogJmp();
    }

    /**
     * @test
     * @dataProvider parameterProvider
     */
    public function shouldReturn0($x, $y, $d, $expected)
    {
        $this->assertSame($this->fixture->solution($x, $y, $d), $expected);
    }

    public function parameterProvider()
    {
        return [
            [
                1,
                2,
                1,
                1
            ],
            [
                10,
                85,
                30,
                3
            ]
        ];
    }

}