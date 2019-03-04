<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

abstract class AcceptanceTest extends TestCase
{
    /**
     * @var SingleParamSolutionInterface
     */
    protected $fixture;

    protected function setUp(): void
    {
        $this->fixture = $this->makeFixture();
    }

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
    abstract protected function makeFixture();
}