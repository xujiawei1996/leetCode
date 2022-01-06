<?php
class rotateArray {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $len = count($nums);
        if($k%$len == 0) {
            return $nums;
        }
        $k = $k % $len;

        //旋转0到$len-k个
        for ($l = 0,$r=$len-$k-1;$l<$r;$l++,$r--){
            list($nums[$l],$nums[$r]) = array($nums[$r],$nums[$l]);
        }

        //旋转$len到$len-$k个
        for($l = $len-$k,$r = $len-1;$l<$r;$l++,$r--){
            list($nums[$l],$nums[$r]) = array($nums[$r],$nums[$l]);
        }

        //整体翻转
        for ($l = 0,$r=$len-1;$l<$r;$l++,$r--){
            list($nums[$l],$nums[$r]) = array($nums[$r],$nums[$l]);
        }
    }
}

$nums = [1,2];
$s = new rotateArray();
$s->rotate($nums,3);
var_dump($nums);