<?php

namespace Tests;

use Lessons\Lesson7\Brackets;
use PHPUnit\Framework\TestCase;

class BracketsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Brackets();
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
