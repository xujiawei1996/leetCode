<?php

/**
 * https://leetcode-cn.com/problems/3sum/
 *
 * 给你一个包含 n 个整数的数组 nums，判断 nums 中是否存在三个元素 a，b，c ，使得 a + b + c = 0 ？请你找出所有和为 0 且不重复的三元组。
 *
 * 注意：答案中不可以包含重复的三元组。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/3sum
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */


class Solution
{

    function threeSum($nums)
    {
        $results = [];
        $len     = count($nums);
        sort($nums);

        for ($i = 0; $i < $len; $i++) {
            if ($nums[0] > 0) {
                return [];
            }

            if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
                continue;
            }

            $num   = $nums[$i];
            $left  = $i + 1;
            $right = $len - 1;
            while ($left < $right) {
                if ($num + $nums[$left] + $nums[$right] > 0) {
                    $right--;
                } else if ($num + $nums[$left] + $nums[$right] < 0) {
                    $left++;
                } else {
                    $result  = [$num, $nums[$left], $nums[$right]];
                    $results[] = $result;
                    //去重
                    while ($left < $right && $nums[$left] == $nums[$left + 1]) $left++;
                    while ($left < $right && $nums[$right] == $nums[$right - 1]) $right--;
                    $right--;
                    $left++;
                }
            }

        }
        return $results;

    }
}

$nums = [-4,-2,-2,-2,0,1,2,2,2,3,3,4,4,6,6];
$s    = new Solution();
var_dump($s->threeSum($nums));