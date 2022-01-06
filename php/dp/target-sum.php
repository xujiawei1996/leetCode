<?php


//https://leetcode-cn.com/problems/target-sum/


class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer   $target
     *
     * @return Integer
     */
    function findTargetSumWays($nums, $target)
    {
        //一定存在left-right = targe
        //left+right = sum
        //2left = targe+sum
        //找到left即可。 凑left有几种方式，$num中的数往left放
        //因为num是整数，如果target+sum / 2不为整数 则没有答案
        //target > sum 也没有答案
        $sum    = 0;
        $dp     = [];
        $dp [0] = 1;

        //初始化dp
        for ($i = 1; $i <= count($nums); $i++) {
            $dp[$i] = 0;
        }


        foreach ($nums as $num) {
            $sum += $num;
        }

        if (($target + $sum) % 2 != 0) {
            return -1;
        }

        if ($sum < $target) {
            return -1;
        }

        $size = ($sum + $target) / 2;
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $size; $j >= $nums[$i]; $j--) {
                $dp[$j] += $dp[$j - $nums[$i]];
            }
        }
        return $dp[$size];
    }
}

$nums = [1, 1, 1, 1, 1];
$s    = new solution();
echo $s->findTargetSumWays($nums, 3);
