<?php
/**
 *给你一个整数数组 nums，有一个大小为 k 的滑动窗口从数组的最左侧移动到数组的最右侧。你只可以看到在滑动窗口内的 k 个数字。滑动窗口每次只向右移动一位。
 *
 * 返回 滑动窗口中的最大值 。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode.cn/problems/sliding-window-maximum
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

class maxSlidingWindowQueue
{
    protected $queue;
    public function __construct()
    {
        $this->queue = new SplQueue();
    }

    public function push($v)
    {
        while (!$this->queue->isEmpty() && $v > $this->queue->top()) {
            $this->queue->pop();
        }
        $this->queue->enqueue($v);
    }

    public function pop($v)
    {
        if (!$this->queue->isEmpty() && $v == $this->queue->bottom()) {
            $this->queue->dequeue();
        }
    }

    public function getMax()
    {
        return $this->queue->bottom();
    }
}

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
        $result = [];
        $queue = new maxSlidingWindowQueue();

        for ($i = 0;$i<$k;$i++){
            $queue->push($nums[$i]);
        }

        $result[] = $queue->getMax();

        for ($i = $k;$i<count($nums);$i++){
            $queue->pop($nums[$i-$k]);
            $queue->push($nums[$i]);
            $result[] = $queue->getMax();
        }

        return $result;
    }
}

$nums = [1,3,-1,-3,5,3,6,7];
$k = 3;
$s = new Solution();
var_dump($s->maxSlidingWindow($nums,$k));