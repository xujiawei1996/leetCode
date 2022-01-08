<?php

//https://leetcode-cn.com/problems/spiral-matrix-ii/


class Solution
{

    /**
     * @param Integer $n
     *
     * @return Integer[][]
     */
    function generateMatrix($n)
    {
        $row = $n - 1;
        $col = $n - 1;

        $r      = 0;
        $c      = 0;
        $num    = 1;
        $result = $res = array_fill(0, $n, array_fill(0, $n, 0));
        while ($num <= $n * $n) {
            //行
            for ($i = $c; $i <= $col; $i++) {
                $result[$r][$i] = $num++;
            }
            if (++$r > $row) break;

            //列
            for ($i = $r; $i <= $row; $i++) {
                $result[$i][$col] = $num++;
            }
            if (--$col < $c) break;

            //行
            for ($i = $col; $i >= $c; $i--) {
                $result[$row][$i] = $num++;
            }
            if (--$row < $r) break;

            //列
            for ($i = $row; $i >= $r; $i--) {
                $result[$i][$c] = $num++;
            }
            if (++$c > $col) break;
        }
        return $result;
    }
}

$s = new Solution();
$a = $s->generateMatrix(3);
var_dump($a);