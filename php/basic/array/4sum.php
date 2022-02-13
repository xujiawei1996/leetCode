<?php

class Solution
{

    //https://leetcode-cn.com/problems/4sum
    /**
     * @param Integer[] $nums
     * @param Integer   $target
     *
     * @return Integer[][]
     */
    function fourSum($nums, $target)
    {
        $len = count($nums);
        sort($nums);
        $result = [];
        for ($i = 0; $i < $len; $i++) {
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
                continue;
            }

            for ($j = $i + 1; $j < $len; $j++) {
                if ($j > $i + 1 && $nums[$j] == $nums[$j - 1]) {
                    continue;
                }

                $left  = $j + 1;
                $right = $len - 1;
                while ($left < $right) {
                    if ($nums[$i] + $nums[$j] + $nums[$left] + $nums[$right] > $target) {
                        $right--;
                    } else if ($nums[$i] + $nums[$j] + $nums[$left] + $nums[$right] < $target) {
                        $left++;
                    } else {
                        $temp     = [$nums[$i], $nums[$j], $nums[$left], $nums[$right]];
                        $result[] = $temp;
                        while ($left < $right && $nums[$left] == $nums[$left + 1]) $left++;
                        while ($left < $right && $nums[$right] == $nums[$right - 1]) $right--;
                        $left++;
                        $right--;
                    }
                }
            }
        }
        return $result;
    }
}

$s      = new Solution();
$nums   = [2, 2, 2, 2, 2];
$target = 8;
var_dump($s->fourSum($nums, $target));