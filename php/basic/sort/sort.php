<?php


class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer   $k
     *
     * @return Integer
     */
    function findKthLargest($nums, $k)
    {
        $len = count($nums);
        $num = $this->bubbleSort($nums);
        return $num[$len - $k];
    }

    //冒泡排序
    function bubbleSort($data)
    {
        $len = count($data);
        for ($i = 0; $i < $len; $i++) {
            $flag = true;
            for ($j = 0; $j < $len - 1 - $i; $j++) {
                if ($data[$j] > $data[$j + 1]) {
                    $flag = false;
                    list($data[$j + 1], $data[$j]) = [$data[$j], $data[$j + 1]];
                }
            }
            if ($flag) {
                return $data;
            }
        }
        return $data;
    }

    //插入排序
    function insertSort($data,$start,$end)
    {

    }

    //快排
    function quickSort(&$data, $start, $end)
    {
        if ($start > $end) {
            return;
        }
        $key   = $data[$start];
        $left  = $start;
        $right = $end;

        //因为这里key取得最左边的，所以用最右边的先比较
        while ($left < $right) {
            while ($left < $right && $data[$right] >= $key) {
                $right--;
            }
            while ($left < $right && $data[$left] <= $key) {
                $left++;
            }
            if ($left < $right) {
                list($data[$left], $data[$right]) = [$data[$right], $data[$left]];
            }
        }
        $data[$start] = $data[$left];
        $data[$left]  = $key;
        $this->quickSort($data, $start, $right - 1);
        $this->quickSort($data, $right + 1, $end);
    }

    //三数取中
    function findMid($data, $left, $right)
    {
        $mid     = ($right - $left - 1) / 2;
        $first   = $data[0];
        $midData = $data[$mid];
        $last    = $data[$mid - 1];
        //first > mid > last
        if ($first >= $midData) {
            if ($midData < $last) {
                return $midData;
            }
            if ($first < $last) {
                return $first;
            }
            return $last;
        } else if ($first < $midData) {
            if ($first > $last) {
                return $first;
            }
            if ($last > $midData) {
                return $midData;
            }
            return $last;
        }
    }

    //堆排
    function sortArray($arr){
        $count = count($arr);
        // 建堆
        for($i = ($count / 2) - 1; $i >= 0; $i --){
            $this->heapAdjust($arr, $i, $count);
        }
        // 调整堆
        for($i = $count - 1; $i >= 0; $i--){
            //将堆顶元素与最后一个元素交换
            list($arr[0],$arr[$i]) = array($arr[$i],$arr[0]);
            $this->heapAdjust($arr,0,$i - 1);
        }
        return $arr;
    }

    function heapAdjust(&$arr, $start, $end){
        $tmp = $arr[$start];
        for($j = 2 * $start +1; $j <= $end; $j = 2 * $j + 1){
            if($j < $end && isset($arr[$j+1]) && $arr[$j] < $arr[$j+1]){
                $j++;
            }
            if($tmp < $arr[$j]){
                $arr[$start] = $arr[$j];
                $start = $j;
            }
        }
        $arr[$start] = $tmp;
    }
}

$num = [3, 2, 1, 5, 6, 4];
$s   = new Solution();
//$d = $s->findKthLargest($num,2);
//var_dump($d);
$s->quickSort($num,0,count($num)-1);
var_dump($num);