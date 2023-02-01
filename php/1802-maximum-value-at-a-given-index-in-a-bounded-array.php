<?php
/**
 * 给你三个正整数 n、index 和 maxSum 。你需要构造一个同时满足下述所有条件的数组 nums（下标 从 0 开始 计数）：
 *
 * nums.length == n
 * nums[i] 是 正整数 ，其中 0 <= i < n
 * abs(nums[i] - nums[i+1]) <= 1 ，其中 0 <= i < n-1
 * nums 中所有元素之和不超过 maxSum
 * nums[index] 的值被 最大化
 * 返回你所构造的数组中的 nums[index] 。
 *
 * 注意：abs(x) 等于 x 的前提是 x >= 0 ；否则，abs(x) 等于 -x 。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode.cn/problems/maximum-value-at-a-given-index-in-a-bounded-array
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

class Solution
{

    /**
     * @param Integer $n
     * @param Integer $index
     * @param Integer $maxSum
     *
     * @return Integer
     */
    function maxValue($n, $index, $maxSum)
    {
        if ($n == $maxSum) {
            return 1;
        }
        $arr = [];
        for ($i = 0; $i < $n; $i++) {
            $arr[$i] = 1;
        }

        $m = $maxSum - $n;
        

    }
}