<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $sNew = explode(" ",$s);
        $count = count($sNew)-1;
        $newStr = "";
        for($i = $count;$i>=0;$i--){
            if(!empty($sNew[$i]))
                $newStr = $newStr.$sNew[$i]." ";
        }
        return $newStr;
    }
}

$s1 = "the sky is blue";
$s = new Solution();
echo $s->reverseWords($s1);