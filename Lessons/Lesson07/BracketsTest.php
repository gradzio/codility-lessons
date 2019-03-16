<?php

namespace Tests;

use Lessons\Lesson7\Brackets;

class BracketsTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new Brackets();
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                [''], 1
            ],
            [
                ['('], 0
            ],
            [
                ['())'], 0
            ],
            [
                ['()'], 1
            ],
            [
                ['()()'], 1
            ],
            [
                ['(())'], 1
            ],
            [
                ['()[]'], 1
            ],
            [
                ['[]{}'], 1
            ],
            [
                ['()[]{}'], 1
            ],
            [
                ['([{}])'], 1
            ],
            [
                ['({}[])'], 1
            ],
            [
                ['()))'], 0
            ],
            [
                ['((]]'], 0
            ],
            [
                ['()[]{{'], 0
            ]
        ];
    }
}
