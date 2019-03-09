<?phpgit

namespace Tests;


use Lessons\Lesson5\MinAvgTwoSlice;

class MinAvgTwoSliceTest extends AcceptanceTest
{
    protected function makeFixture()
    {
        return new MinAvgTwoSlice();
    }

    public function acceptanceProvider(): array
    {
        [
            [
                []
            ]
        ];
    }
}