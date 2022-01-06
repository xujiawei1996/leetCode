<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer   $target
     *
     * @return Integer
     */
    function combinationSum4($nums, $target)
    {
        $dp    = [];
        $dp[0] = 1;


        for ($i = 1; $i <= $target; $i++) {
            $dp[$i] = 0;
        }

        for ($i = 0; $i <= $target; $i++) {
            for ($j = 0; $j < count($nums); $j++) {
                if ($i >= $nums[$j]) $dp[$i] += $dp[$i - $nums[$j]];
            }
        }
        return $dp[$target];
    }
}


$s = new Solution();
echo $s->combinationSum4([1, 2, 3], 4);