<?php

//https://leetcode-cn.com/problems/reverse-words-in-a-string/


class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $s = trim($s);
        //整体翻转
        $len = strlen($s);
        $start = 0;
        $end = $len-1;
        while($start < $end){
            $tmp = $s[$start];
            $s[$start] = $s[$end];
            $s[$end] = $tmp;
            $start++;
            $end--;
        }

        $start = 0;
        $i = 0;
        $end = 0;
        while ($end <= $len){
            if ($end == $len){
                $this->reverse($s,$start,$end-1);
                break;
            }else{
                if ($s[$i] != " "){
                    $i++;
                    $end++;
                }else{
                    $this->reverse($s,$start,$end-1);
                    $start = $end+1;
                    $end++;
                    $i++;
                }
            }
        }

        $newS = "";
        for ($i = 0;$i<$len;$i++){
            if ($s[$i] == " " && $s[$i+1] == " "){
                continue;
            }
            $newS .= $s[$i];
        }
        return $newS;
    }

    function reverse(&$s,$start,$end){
        while ($start < $end){
            $temp = $s[$start];
            $s[$start] = $s[$end];
            $s[$end] = $temp;
            $start++;
            $end--;
        }
        return $s;
    }
}

$s = "  Bob    Loves  Alice   ";
$ss = new solution();
var_dump($ss->reverseWords($s));