<?php

//https://leetcode-cn.com/problems/minimum-size-subarray-sum/


class Solution
{

    /**
     * @param Integer   $target
     * @param Integer[] $nums
     *
     * @return Integer
     */
    function minSubArrayLen1($target, $nums)
    {
        //暴力解法 n平方
        $numsLen = count($nums);
        $result  = PHP_INT_MAX;
        for ($i = 0; $i < $numsLen; $i++) {
            $sum = 0;
            for ($j = $i; $j < $numsLen; $j++) {
                $sum += $nums[$j];
                if ($sum >= $target) {
                    $len    = $j - $i + 1;
                    $result = $result > $len ? $len : $result;
                }
            }
        }
        return $result == PHP_INT_MAX ? 0 : $result;
    }

    //滑动窗口
    function minSubArrayLen2($target, $nums)
    {
        $numsLen = count($nums);
        $result  = PHP_INT_MAX;
        $sum     = 0;
        $i       = 0;
        for ($j = 0; $j < $numsLen; $j++) {
            $sum += $nums[$j];
            while ($sum >= $target) {
                $len    = $j - $i + 1;
                $result = $result > $len ? $len : $result;
                $sum    -= $nums[$i++];
            }
        }
        return $result == PHP_INT_MAX ? 0 : $result;
    }
}


$s = new Solution();
echo $s->minSubArrayLen1(11, [1, 1, 1, 1, 1, 1, 1, 1]);