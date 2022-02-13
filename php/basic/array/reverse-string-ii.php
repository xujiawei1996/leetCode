<?php
//https://leetcode-cn.com/problems/reverse-string-ii/

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k) {
        $i = 0;

        while ($i<=strlen($s)-1){
            $start = $i*2*$k;
            $end = $i*2*$k+$k-1;
            if ($start < strlen($s)){
                if ($end < strlen($s)){
                    $this->reverse($s,$start,$end);
                }else{
                    $this->reverse($s,$start,strlen($s)-1);
                }
            }
            $i++;
        }
        return $s;
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

$s =  new solution();
var_dump($s->reverseStr("abcdefg",2));