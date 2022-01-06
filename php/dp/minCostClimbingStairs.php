<?php

class Solution {

    /**
     * @param Integer[] $cost
     * @return Integer
     */
    function minCostClimbingStairs($cost) {
        $dp=[];//状态转移数组
        $dp[0] = $cost[0];
        $dp[1] = $cost[1];
        $len = count($cost);
        for($i = 2;$i<=$len;$i++){
            $dp[$i] = min($dp[$i-1]+$cost[$i],$dp[$i-2]+$cost[$i]);
        }
        return min($dp[$len-1],$dp[$len-2]);
    }
}

