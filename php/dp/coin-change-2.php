<?php

class Solution
{

    /**
     * @param Integer   $amount
     * @param Integer[] $coins
     *
     * @return Integer
     */
    function change($amount, $coins)
    {
        $dp    = [];
        $dp[0] = 1;
        for ($i = 1; $i <= $amount; $i++) {
            $dp[$i] = 0;
        }

        for ($i = 0; $i <= $amount; $i++) {
            for ($j = 0; $j < count($coins); $j++) {
                if ($i >= $coins[$j]) $dp[$i] += $dp[$i - $coins[$j]];
            }
        }

        return $dp[$amount];
    }
}

$s = new Solution();
var_dump($s->change(5,[1,2,5]));