<?php


class solution{
    /**
     * 一次只能爬1层或者2层情况
     * @param $n
     *
     * @return int|mixed
     */
    function climbingStairs($n){
        if ($n == 1){
            return 1;
        }else if($n == 2){
            return 2;
        }

        $dp[1] = 1;
        $dp[2] = 2;
        for ($i = 3;$i<=$n;$i++){
            $dp[$i] = $dp[$i-1]+$dp[$i-2];
        }
        return $dp[$n];
    }

    /**
     * 一次可以上多层 m层
     */
    function climbingStairsByMLevel($n,$m) {
         $dp[1] = 1;
         for ($i = 1;$i<=$n;$i++){
             for ($j = 1;$j<=$m;$j++){
                 if ($i>=$j) $dp[$i] += $dp[$i-$j];
             }
         }
         return $dp[$n];
    }

}