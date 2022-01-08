<?php

/**
 * https://leetcode-cn.com/problems/remove-element/
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $slow = 0;
        $size = count($nums);
        for ($fast=0;$fast<$size;$fast++){
            if ($nums[$fast] != $val){
                $nums[$slow++] = $nums[$fast];
            }
        }
        return $slow;
    }
}

$array = [3,3,3,3];
$s = new Solution();
echo $s->removeElement($array,3);