<?php

/**
 * Class Solution
 * 给你三个整数数组 nums1、nums2 和 nums3 ，请你构造并返回一个 元素各不相同的 数组，且由 至少 在 两个 数组中出现的所有值组成。数组中的元素可以按 任意 顺序排列。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode.cn/problems/two-out-of-three
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer[] $nums3
     *
     * @return Integer[]
     */
    function twoOutOfThree($nums1, $nums2, $nums3)
    {
        $result = [];
        $numArray = [];
        foreach ($nums1 as $num1){
            if (empty($numArray[$num1])){
                $numArray[$num1] = 1;
            }
        }

        $num2Mid = [];
        foreach ($nums2 as $num2){
            if (empty($numArray[$num2])){
                $numArray[$num2] = 1;
                $num2Mid[$num2] = 1;
            }elseif(empty($num2Mid[$num2]) && $numArray[$num2] == 1){
                $result[] = $num2;
                $numArray[$num2]++;
            }
        }

        foreach ($nums3 as $num3){
            if (!empty($numArray[$num3]) && $numArray[$num3] == 1){
                $result[] = $num3;
                $numArray[$num3]++;
            }
        }

        return $result;

    }
}

$nums1 = [1,2,2];
$nums2 = [4,3,3];
$nums3 = [5];
$s = new Solution();
var_dump($s->twoOutOfThree($nums1,$nums2,$nums3));