<?php

/**
 * Class Solution
 * 给你一个字符串数组 tokens ，表示一个根据 逆波兰表示法 表示的算术表达式。
 *
 * 请你计算该表达式。返回一个表示表达式值的整数。
 *
 * 注意：
 *
 * 有效的算符为 '+'、'-'、'*' 和 '/' 。
 * 每个操作数（运算对象）都可以是一个整数或者另一个表达式。
 * 两个整数之间的乘法总是 向零截断 。
 * 表达式中不含除零运算。
 * 输入是一个根据逆波兰表示法表示的算术表达式。
 * 答案及所有中间计算结果可以用 32 位 整数表示。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode.cn/problems/evaluate-reverse-polish-notation
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution
{

    /**
     * @param String[] $tokens
     *
     * @return Integer
     */
    function evalRPN($tokens)
    {
        $result     = 0;
        $stack = new SplStack();

        foreach ($tokens as $token) {
            if ($token == '+') {
                $num2 = $stack->pop();
                $num1 = $stack->pop();
                $result = $num1+$num2;
//                $s = '('.$num1.'+'.$num2.')';
                $stack->push($result);
            } else if ($token == '-') {
                $num2 = $stack->pop();
                $num1 = $stack->pop();
                $result = $num1-$num2;

                $s = '('.$num1.'-'.$num2.')';
                $stack->push($result);
            } else if ($token == '*') {
                $num2 = $stack->pop();
                $num1 = $stack->pop();
                $result = $num1*$num2;

                $s = '('.$num1.'*'.$num2.')';
                $stack->push($result);
            } elseif ($token == '/') {
                $num2 = $stack->pop();
                $num1 = $stack->pop();
                $result = intval($num1/$num2);

                $s = '('.$num1.'/'.$num2.')';
                $stack->push($result);
            } else {
                $stack->push($token);
            }
        }
        return $stack->pop();
    }
}

$s = new Solution();
echo $s->evalRPN(["10","6","9","3","+","-11","*","/","*","17","+","5","+"]);