<?php

class Solution {

    /**
     * @param Integer[][] $obstacleGrid
     * @return Integer
     */

    //https://leetcode-cn.com/problems/unique-paths-ii/submissions/

    function uniquePathsWithObstacles($obstacleGrid) {
        //初始化
        $flag1 = 0;
        for($i=0;$i<count($obstacleGrid);$i++) {
            if ($flag1) {
                $dp[$i][0] = 0;
                continue;
            }else{
                if($obstacleGrid[$i][0] == 1){
                    $dp[$i][0] = 0;
                    $flag1 = 1;
                }else{
                    $dp[$i][0] = 1;
                }
            }
        }

        $flag2 = 0;
        for($j=0;$j<count($obstacleGrid[0]);$j++) {
            if ($flag2) {
                $dp[0][$j] = 0;
                continue;
            }else{
                if($obstacleGrid[0][$j] == 1){
                    $dp[0][$j] = 0;
                    $flag2 = 1;
                }else{
                    $dp[0][$j] = 1;
                }
            }
        }

        for($i = 1;$i<count($obstacleGrid);$i++) {
            for($j = 1;$j<count($obstacleGrid[0]);$j++){
                if($obstacleGrid[$i][$j] == 1){
                    $dp[$i][$j] = 0;
                }else{
                    $dp[$i][$j] = $dp[$i-1][$j] +$dp[$i][$j-1];
                }
            }
        }
        return $dp[count($obstacleGrid)-1][count($obstacleGrid[0])-1];
    }
}

$s = new Solution();
$obstacleGrid = [[0,1]];//[[0,0],[0,1]];
$s->uniquePathsWithObstacles($obstacleGrid);