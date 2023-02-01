<?php

/**
 * 给你一个整数数组 nums 和一个整数 k ，请你返回其中出现频率前 k 高的元素。你可以按 任意顺序 返回答案。
 * https://leetcode.cn/problems/top-k-frequent-elements/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $res = [];
        $sort = [];
        foreach ($nums as $num) {
            if (isset($sort[$num]))$sort[$num]++;
            else $sort[$num] = 1;
        }
        arsort($sort);
        for ($i=0;$i<$k;$i++){
            $res[] = array_keys($sort)[$i];
        }
        return $res;
    }
}

$nums = [1,1,1,2,2,2,2,3,3,3,3,3];
$k = 2;
$s = new Solution();
var_dump($s->topKFrequent($nums,$k));
