<?php

function solution($A): int
{
    foreach (array_count_values($A) as $number => $count) {
        if ($count % 2 === 1) {
            return $number;
        }
    }
}