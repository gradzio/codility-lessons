<?php

namespace Tests;

use Lessons\Lesson4\FrogRiverOne;
use PHPUnit\Framework\TestCase;

class FrogRiverOneTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new FrogRiverOne();
    }

    public function acceptanceProvider(): array
    {
         return [
             [
                 [5, [1]], -1
             ],
             [
                 [1, [0]], -1
             ],
             [
                 [1, [1]], 0
             ],
             [
                 [1, [0, 1]], 1
             ],
             [
                 [2, [2, 1]], 1
             ],
             [
                 [3, [1, 3, 2]], 2
             ],
             [
                 [2, [1, 1, 1, 1, 2, 1, 1, 1]], 4
             ]
         ];
    }
}
