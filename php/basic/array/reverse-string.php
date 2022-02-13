<?php
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $start = 0;$end = count($s)-1;
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

$ss = new Solution();
$s = ["H","a","n","n","a","h"];
var_dump($ss->reverseString($s));