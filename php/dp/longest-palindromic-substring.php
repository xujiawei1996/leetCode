<?php

/**
 * 给你一个字符串 s，找到 s 中最长的回文子串。
 *
 *  
 *
 * 示例 1：
 *
 * 输入：s = "babad"
 * 输出："bab"
 * 解释："aba" 同样是符合题意的答案。
 * 示例 2：
 *
 * 输入：s = "cbbd"
 * 输出："bb"
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/longest-palindromic-substring
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

class Solution
{

    /**
     * @param String $s
     *
     * @return String
     */
    function longestPalindrome($s)
    {
        $strLen    = strlen($s) - 1;
        $maxLen = 0;
        if ($strLen == 0) {
            return $s;
        }
        $org = 0;
        while ($org <= $strLen) {
            $len1 = $this->getStr($s, $org, $org);
            $len2 = $this->getStr($s, $org, $org + 1);
            $len3 = max($len1, $len2);
            if ($len3 > $maxLen) {
                //这里减一是因为，这次取值可能是org，org+1比较，在计算起点的时候，需要减一
                $start = $org - intval(($len3-1)/2);
                $end   = $org + intval($len3/2);
                $maxLen = $len3;
            }
            $org++;
        }
        return substr($s, $start, $end-$start+1);
    }

    function getStr($s, $start, $end)
    {
        while ($start >= 0 && $end <= strlen($s) - 1) {
            if ($s[$start] == $s[$end]) {
                $start--;
                $end++;
            }else{
                break;
            }
        }
        return $end - $start - 1;
    }
}

$s = new Solution();
echo $s->longestPalindrome("cbaabd");