<?php

class Solution
{

    /**
     * @param Integer $n
     *
     * @return Integer
     */
    function integerBreak($n)
    {
        $dp[0] = 0;
        $dp[1] = 1;
        $dp[2] = 1;
        for ($i = 2; $i <= $n; $i++) {
            $dp[$i] = 0;
        }
        for ($i = 3; $i <= $n; $i++) {
            for ($j = 1; $j < $i; $j++) {
                $dp[$i] = max($dp[$i], max($j * ($i - $j), $dp[$i - $j] * $j));
            }
        }
        return $dp[$n];
    }
}

$s = new Solution();
$s->integerBreak(10);