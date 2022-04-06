<?php
//class Solution {
//
//    /**
//     * @param Integer[] $arr
//     * @param Integer $k
//     * @return Integer
//     */
//    function findKthPositive($arr, $k) {
//        $i = 1;
//        $j = 0;
//        $count = 1;
//        while(true){
//            if (isset($arr[$j]) && $i == $arr[$j]){
//                $j++;
//                $i++;
//            }else{
//                if($count == $k){
//                    return $i;
//                }
//                $count++;
//                $i++;
//            }
//
//        }
//    }
//}
//
//$s = new Solution();
//echo $s->findKthPositive([2,3,4,7,11],2);


/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

//    /**
//     * @param ListNode $head
//     * @param Integer $k
//     * @return ListNode
//     */
//    function reverseKGroup($head, $k) {
//
//    }

//    /**
//     * @param String $s
//     * @return Integer
//     */
//    function myAtoi($s) {
//        $r = "";
//        $s = trim($s);
//        $len = strlen($s);
//        for ($i = 0;$i<$len;$i++){
//            if (strlen($r) == 0 && $s[$i] == '-' || $s[$i] == '+'){
//                $r .= $s[$i];
//            }else{
//                if (strlen($r) == 1 && ($r[0] == '+' || $r[0] == '-')
//                    && $s[$i] == 0){
//                    continue;
//                } else if ($s[$i] >= '0' && $s[$i] <= '9'){
//                    $r .= $s[$i];
//                }else{
//                    break;
//                }
//            }
//        }
//
//        if (strlen($r) == 0 ||
//            (strlen($r) == 1&& $r[0] == '+' && $r[0] == '-')){
//            return 0;
//        }
//
//        if ($r > pow(2,31)-1){
//            return pow(2,31);
//        }else if($r < -pow(2,31)){
//            return -pow(2,31);
//        }
//        return $r;
//    }

    
}

//$s = new Solution();
//echo $s->myAtoi("+10dsa042");
echo date('Y-m-d H-i-s');