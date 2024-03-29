<?php

/**
 * Class Solution
 * 给你一个整数数组 nums，有一个大小为 k 的滑动窗口从数组的最左侧移动到数组的最右侧。你只可以看到在滑动窗口内的 k 个数字。滑动窗口每次只向右移动一位。
 *
 * 返回 滑动窗口中的最大值 。
 *
 *  
 *
 * 示例 1：
 *
 * 输入：nums = [1,3,-1,-3,5,3,6,7], k = 3
 * 输出：[3,3,5,5,6,7]
 * 解释：
 * 滑动窗口的位置                最大值
 * ---------------               -----
 * [1  3  -1] -3  5  3  6  7       3
 * 1 [3  -1  -3] 5  3  6  7       3
 * 1  3 [-1  -3  5] 3  6  7       5
 * 1  3  -1 [-3  5  3] 6  7       5
 * 1  3  -1  -3 [5  3  6] 7       6
 * 1  3  -1  -3  5 [3  6  7]      7
 *
 * 示例 2：
 *
 * 输入：nums = [1], k = 1
 * 输出：[1]
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/sliding-window-maximum
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer   $k
     *
     * @return Integer[]
     */
    function maxSlidingWindow($nums, $k)
    {
        $res   = [];
        $count = count($nums);
        $q = new SplQueue();
        for ($i = 0; $i < $count; $i++) {
            while (!$q->isEmpty() && $q->top() < $nums[$i]){
                $q->pop();
            }

            $q->enqueue($nums[$i]);

            if ($i - $k >= 0 && $q->bottom() == $nums[$i - $k]) {
                $q->dequeue();
            }

            if ($i >= $k - 1) {
                $res[] = $q->bottom();
            }
        }
        return $res;
    }
}

$s = new Solution();
$r = $s->maxSlidingWindow([1,3,-1,-3,5,3,6,7],3);
var_dump($r);