<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class MaxDoubleSliceSumTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MaxDoubleSliceSum();
    }

    public function acceptanceProvider(): array
    {
        return [
            [

            ]
        ];
    }
}
