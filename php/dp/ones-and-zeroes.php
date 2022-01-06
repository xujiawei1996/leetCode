<?php
//https://leetcode-cn.com/problems/ones-and-zeroes/


class Solution {

    /**
     * @param String[] $strs
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function findMaxForm($strs, $m, $n) {
        $dp = [];

        for($i = 0;$i<=$m;$i++){
            for ($j = 0;$j <= $n; $j ++){
                $dp[$i][$j] = 0;
            }
        }

        //字符串中不是0就是1
        foreach ($strs as $key => $str) {
            $zeroNum = 0;
            $oneNum  = 0;
            for ($i = 0; $i<strlen($str);$i++) {
                if($str[$i] == "1"){
                   $oneNum++;
                }else{
                    $zeroNum++;
                }
            }

            for ($i = $m; $i >= $zeroNum; $i--){
                for ($j = $n; $j >= $oneNum; $j--) {
                    $dp[$i][$j] = max($dp[$i][$j],$dp[$i-$zeroNum][$j-$oneNum]+1);
                }
            }
        }
        return $dp[$m][$n];
    }
}

$num = ["10","0001","111001","1","0"];
$m = 5;
$n = 3;
$s = new solution();

var_dump($s->findMaxForm($num,$m,$n));