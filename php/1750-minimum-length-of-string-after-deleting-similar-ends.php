<?php

/**
 * https://leetcode.cn/problems/minimum-length-of-string-after-deleting-similar-ends/
 * 给你一个只包含字符 'a'，'b' 和 'c' 的字符串 s ，你可以执行下面这个操作（5 个步骤）任意次：
 *
 * 选择字符串 s 一个 非空 的前缀，这个前缀的所有字符都相同。
 * 选择字符串 s 一个 非空 的后缀，这个后缀的所有字符都相同。
 * 前缀和后缀在字符串中任意位置都不能有交集。
 * 前缀和后缀包含的所有字符都要相同。
 * 同时删除前缀和后缀。
 * 请你返回对字符串 s 执行上面操作任意次以后（可能 0 次），能得到的 最短长度 。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode.cn/problems/minimum-length-of-string-after-deleting-similar-ends
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution
{

    /**
     * @param String $s
     *
     * @return Integer
     */
    function minimumLength($s)
    {
        $i = 0;
        $j = strlen($s) - 1;
        while ($i < $j && $s[$i] == $s[$j]) {
            $c = $s[$i];
            while ($s[$i] == $c && $i <= $j) {
                $i++;
            }
            while ($s[$j] == $c && $i <= $j) {
                $j--;
            }
        }
        return $j - $i + 1;
    }
}

$s = new Solution();
echo $s->minimumLength('cabaabaca');