<?php
//https://leetcode-cn.com/problems/4sum-ii/

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer[] $nums3
     * @param Integer[] $nums4
     *
     * @return Integer
     */
    function fourSumCount($nums1, $nums2, $nums3, $nums4)
    {
        $map = [];
        foreach ($nums1 as $num1) {
            foreach ($nums2 as $num2) {
                $num12       = $num1 + $num2;
                $map[$num12] = isset($map[$num1 + $num2]) ? $map[$num12] + 1 : 1;
            }
        }

        $count = 0;
        foreach ($nums3 as $num3) {
            foreach ($nums4 as $num4) {
                $num34 = -($num3+$num4);
                if (isset($map[$num34])) {
                    $count += $map[$num34];
                }
            }
        }
        return $count;
    }
}

$s     = new Solution();
$nums1 = [1, 2];
$nums2 = [-2, -1];
$nums3 = [-1, 2];
$nums4 = [0, 2];
$s->fourSumCount($nums1, $nums2, $nums3, $nums4);