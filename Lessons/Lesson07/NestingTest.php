<?php

namespace Tests;

use Lessons\Lesson7\Brackets;
use Lessons\Lesson7\Nesting;

class NestingTest extends AcceptanceTest
{
    public function makeFixture()
    {
        // Same features as Brackets.php so just changed fixture
        return new Brackets();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [['']], 0
            ]
        ];
    }
}
