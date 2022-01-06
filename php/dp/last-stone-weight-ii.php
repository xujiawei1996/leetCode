<?php

//https://leetcode-cn.com/problems/last-stone-weight-ii/
class Solution
{

    /**
     * @param Integer[] $stones
     *
     * @return Integer
     */
    function lastStoneWeightII($stones)
    {
        //计算总数
        $sum = 0;
        foreach ($stones as $stone) {
            $sum += $stone;
        }

        //初始化dp
        $dp = [];
        for ($i = 0; $i < $sum; $i++) {
            $dp[$i] = 0;
        }

        $target = $sum/2;

        for ($i = 0;$i<count($stones);$i++){
            for ($j=$target;$j>=$stones[$i];$j--){
                $dp[$j] = max($dp[$j],$dp[$j-$stones[$i]]+$stones[$i]);
            }
        }

        return $sum-$dp[$target]-$dp[$target];

    }
}

$stones = [2,7,4,1,8,1];
$s = new Solution();
echo $s->lastStoneWeightII($stones);