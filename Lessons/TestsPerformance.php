<?php

namespace Tests;

trait TestsPerformance
{
    /**
     * @test
     * @dataProvider performanceProvider
     */
    public function shouldPassPerformanceTests($params, $runtimeThresholdSeconds)
    {
        $start = microtime(true);
        $this->fixture->solution(...$params);
        $runtimeInSeconds = (microtime(true) - $start);
        $this->assertLessThanOrEqual($runtimeThresholdSeconds, $runtimeInSeconds);
    }

    abstract public function performanceProvider(): array;
}
