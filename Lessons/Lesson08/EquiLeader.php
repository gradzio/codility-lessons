<?php

namespace Lessons\Lesson8;

class EquiLeader
{
    public function solution($A): int
    {
        $arrayLength = count($A);

        if ($arrayLength === 1) {
            return 0;
        }

        $counts = array_count_values($A);
        arsort($counts);

        $leader = key($counts);
        $leaderCount = $counts[$leader];
        $equiLeader = 0;
        $leftLeaders = 0;

        for ($i = 0; $i < count($A) - 1; $i++) {
            if ($A[$i] === $leader) {
                $leftLeaders++;
            }
            if ($leftLeaders > ($i + 1) / 2
            && $leaderCount - $leftLeaders > ($arrayLength - $i - 1) / 2) {
                $equiLeader++;
            }
        }

        return $equiLeader;
    }
}
