<?php
/**
 * https://leetcode.cn/problems/remove-all-adjacent-duplicates-in-string/
 * 给出由小写字母组成的字符串 S，重复项删除操作会选择两个相邻且相同的字母，并删除它们。
 *
 * 在 S 上反复执行重复项删除操作，直到无法继续删除。
 *
 * 在完成所有重复项删除操作后返回最终的字符串。答案保证唯一。
 *
 *
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode.cn/problems/remove-all-adjacent-duplicates-in-string
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicates($s) {
        $stack = new SplStack();
        $len = strlen($s)-1;
        for ($i = 0;$i<=$len;$i++) {
            if ($stack->isEmpty()) {
                $stack->push($s[$i]);
            } else {
                if ($s[$i] == $stack->top()){
                    $stack->pop();
                }else{
                    $stack->push($s[$i]);
                }
            }
        }

        $return = '';
        while (!$stack->isEmpty()) {
            $return = $stack->pop().$return;
        }
        return $return;
    }
}

$s = new Solution();
echo $s->removeDuplicates('abbacaa');

