<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $newArr = [];
        $len1 = count($nums1);
        $len2 = count($nums2);
        if($len1 > $len2){
            $len = $len1;
        }else{
            $len = $len2;
        }
        $i = 0;
        $j = 0;
        while($i<$len&&$j<$len){
            if(isset($nums1[$i]) && isset($nums2[$j])){
                if($nums1[$i]<$nums2[$j]){
                    $newArr[] = $nums1[$i];
                    $i++;
                }else{
                    $newArr[] = $nums2[$j];
                    $j++;
                }
            }else{
                break;
            }
        }

        if(isset($nums1[$i])){
            while($i < $len1){
                $newArr[] = $nums1[$i];
                $i++;
            }
        }else if(isset($nums2[$j])){
            while($j < $len1){
                $newArr[] = $nums2[$j];
                $j++;
            }
        }

        $allLen = $len1+$len2;
        if($allLen % 2 == 0){
            return ($newArr[$allLen/2-1]+$newArr[$allLen/2]) / 2;
        }
        return $newArr[$allLen/2];
    }
}

$nums1 = [];
$nums2 = [1];
$s= new Solution();
echo $s->findMedianSortedArrays($nums1,$nums2);