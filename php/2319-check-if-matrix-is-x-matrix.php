<?php
/**
 * 如果一个正方形矩阵满足下述 全部 条件，则称之为一个 X 矩阵 ：
 *
 * 矩阵对角线上的所有元素都 不是 0
 * 矩阵中所有其他元素都是 0
 * 给你一个大小为 n x n 的二维整数数组 grid ，表示一个正方形矩阵。如果 grid 是一个 X 矩阵 ，返回 true ；否则，返回 false 。
 *
 *
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode.cn/problems/check-if-matrix-is-x-matrix
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 *
 */

class Solution
{

    /**
     * @param Integer[][] $grid
     *
     * @return Boolean
     */
    function checkXMatrix($grid)
    {
        $len = count($grid);
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len; $j++) {
                if ($i == $j || $i + $j == $len - 1) {
                    if ($grid[$i][$j] === 0) {
                        return false;
                    }
                } else {
                    if ($grid[$i][$j] !== 0) {
                        return false;
                    }
                }
            }

        }
        return true;
    }
}

$grid = [[2, 0, 0, 1], [0, 3, 1, 0], [0, 5, 2, 0], [4, 0, 0, 2]];
$s    = new Solution();
var_dump($s->checkXMatrix($grid));