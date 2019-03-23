<?php

namespace Tests;

trait TestsAcceptance
{
    protected $fixture;
    /**
     * @test
     * @dataProvider acceptanceProvider
     */
    public function shouldPassAcceptanceTests($params, $expected)
    {
        $actual = $this->fixture->solution(...$params);

        $this->assertEquals($expected, $actual);
    }

    abstract public function acceptanceProvider(): array;
}