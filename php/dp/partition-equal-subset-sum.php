<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canPartition($nums)
    {
        //计算综合
        $sum = 0;
        foreach ($nums as $num){
            $sum += $num;
        }
        if ($sum % 2 == 1) return false;

        $target = $sum/2;

        $dp = [];
        //初始化dp
        for ($i=0;$i<=$target;$i++){
            $dp[$i] = 0;
        }

        for ($i = 0;$i<count($nums);$i++){
            for ($j = $target;$j>=$nums[$i];$j--){
                $dp[$j] = max($dp[$j],$dp[$j-$nums[$i]]+$nums[$i]);
            }
        }

        if ($dp[$target] == $target) return true;
        return false;
    }
}

$nums = [1,5,11,5];
$s = new Solution();
echo $s->canPartition($nums);