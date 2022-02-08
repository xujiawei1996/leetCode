<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $arr = array_fill(0,26,0);
        for ($i = 0;$i<strlen($s);$i++){
            $arr[ord($s[$i])-ord('a')]++;
        }

        for ($i = 0;$i<strlen($t);$i++){
            $arr[ord($t[$i])-ord('a')]--;
        }

        foreach ($arr as $a){
            if ($a != 0){
                return false;
            }
        }
        return true;
    }
}

$s = "bbc";
$t = "cbb";
$ss = new Solution();
var_dump($ss->isAnagram($s,$t));