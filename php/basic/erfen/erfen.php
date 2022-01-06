<?php

class Solution
{

    /**
     * @param Integer[] $nums
     *
     * @return Integer
     */
    function findMin($nums)
    {
        $left  = 0;
        $right = count($nums)-1;
        while ($left < $right) {
            $mid = ($right + $left) / 2;
            if ($nums[$mid] < $nums[$right]) {
                $right = $mid;
            } else {
                $left = $mid;
            }
        }
        return $nums[$left];
    }
}

$s = new Solution();
$nums = [1,2,3,4,5];
echo $s->findMin($nums);