<?php

//https://leetcode-cn.com/problems/spiral-matrix/


class Solution
{

    /**
     * @param Integer[][] $matrix
     *
     * @return Integer[]
     */
    function spiralOrder($matrix)
    {
        $row = count($matrix)-1;
        $col = count($matrix[0])-1;

        $r      = 0;
        $c      = 0;
        $result = [];
        while (true) {
            //第一行开始
            for ($i = $c; $i <= $col; $i++) {
                $result[] = $matrix[$r][$i];
            }
            if (++$r > $row) break;

            //列
            for ($i = $r; $i <= $row; $i++) {
                $result[] = $matrix[$i][$col];
            }
            if (--$col < $c) break;

            //行
            for ($i = $col; $i >= $c; $i--) {
                $result[] = $matrix[$row][$i];
            }
            if (--$row < $r) break;

            //列
            for ($i = $row; $i >= $r; $i--) {
                $result[] = $matrix[$i][$c];
            }
            if (++$c > $col) break;
        }
        return $result;
    }
}

$arr = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]];
$s   = new Solution();
var_dump($s->spiralOrder($arr));