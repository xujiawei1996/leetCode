<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $arr = array();
        $res = [];
        foreach ($nums1 as $num1){
            $arr[$num1]=1;
        }

        foreach ($nums2 as $num2){
            if (isset($arr[$num2])){
                $res[$num2] = $num2;
            }
        }
        return array_keys($res);
    }
}

$s = new Solution();
$nums1 = [4,9,5];
$nums2 = [9,4];
var_dump($s->intersection($nums1,$nums2));