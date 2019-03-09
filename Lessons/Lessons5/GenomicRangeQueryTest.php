<?php

namespace Tests;

use Lessons\Lesson5\GenomicRangeQuery;

class GenomicRangeQueryTest extends AcceptanceTest
{
    use TestsPerformance;

    protected function makeFixture()
    {
        return new GenomicRangeQuery();
    }

    public function performanceProvider(): array
    {
        $bigCount = 100000;
        return [
            [
                [implode('', array_fill(0, $bigCount, 'G')), [0], [$bigCount]], 0.5
            ]
        ];
    }

    public function acceptanceProvider(): array
    {
        return [
            [
                ['ACGT', [0], [4]], [1]
            ],
            [
                ['ATGC', [0], [4]], [1]
            ],
            [
                ['ATGC', [1], [4]], [2]
            ],
            [
                ['ATGC', [1], [2]], [3]
            ],
            [
                ['CAGCCTA', [2, 5, 0], [4, 5, 6]], [2, 4, 1]
            ]
        ];
    }

    /**
     * @test
     * @dataProvider genomProvider
     */
    public function shouldGetCorrectGenomValue($string, $expected)
    {
        $actual = $this->fixture->getValue($string);

        $this->assertEquals($expected, $actual);
    }

    public function genomProvider()
    {
        return [
            [
                'A', 1
            ],
            [
                'CA', 1
            ],
            [
                'CC', 2
            ],
            [
                'GT', 3
            ],
            [
                'AT', 1
            ],
            [
                'TT', 4
            ],
            [
                'X', null
            ]
        ];
    }
}
