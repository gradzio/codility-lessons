<?php

namespace Tests;


use Lessons\Lesson4\FrogRiverOne;

class FrogRiverOneTest extends AcceptanceTest
{
  protected function makeFixture()
  {
      return new FrogRiverOne();
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