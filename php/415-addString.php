<?php

/*
https://leetcode-cn.com/problems/add-strings/
415. 字符串相加
给定两个字符串形式的非负整数 num1 和num2 ，计算它们的和。



提示：

num1 和num2 的长度都小于 5100
num1 和num2 都只包含数字 0-9
num1 和num2 都不包含任何前导零
你不能使用任何內建 BigInteger 库， 也不能直接将输入的字符串转换为整数形式
*/

class AddString
{
    function add($string1, $string2)
    {
        $result = '';
        $addBitNum = 0;
        $add       = 0;
        //压栈
        //压栈
        while(1) {
            $string1Num = 0;
            $string2Num = 0;
            if (isset($string1[$i])) {
                $string1Num = $string1[$i];
            }
            if (isset($string2[$i])) {
                $string2Num = $string2[$i];
            }
            $num = $string1Num+$string2Num+$add;
            $add = intval($num / 10);
            $result = $num%10 . $result;
        }
        return $result;
    }
}

$s = new AddString();
$s1 = $s->add("1237","123");
var_dump($s1);