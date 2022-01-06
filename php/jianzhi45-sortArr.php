<?php

class sortArr{

    /**
     * @param Integer[] $nums
     * @return String
     */
    function minNumber($nums) {
        $len = count($nums);

        //启动快排排序
        $this->sort($nums, 0 , $len -1);

        $returnStr = '';
        foreach ($nums as $num) {
            $returnStr .= $num;
        }

        return $returnStr;
    }


    function sort(&$nums,$start,$end)
    {
        if($start > $end) return;

        $left = $start;
        $right = $end;

        while($left < $right) {
            while($left < $right && $nums[$left].$nums[$right] > $nums[$right].$nums[$left]) {
                $left ++;
            }
            while($left < $right && $nums[$left].$nums[$right] <= $nums[$right].$nums[$left]) {
                $right --;
            }
            if ($left <= $right) {
                list($nums[$left],$nums[$right]) = array($nums[$right],$nums[$left]);
            }
        }

        $nums[$left] = $nums[$start];
        $this->sort($nums,$start,$left-1);
        $this->sort($nums,$left+1,$end);
    }

}

$nums = [11,98,29,21,3,9];
$s = new sortArr();
$r = $s->minNumber($nums);
var_dump($r);