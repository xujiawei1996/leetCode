<?php
//链表

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
class ListNode
{
    public $val  = 0;
    public $next = NULL;

    function __construct($val = 0, $next = NULL)
    {
        $this->val  = $val;
        $this->next = $next;
    }
}

class singlyList{
    //https://leetcode-cn.com/problems/reverse-linked-list/
    //翻转链表
    //循环
    /**
     * @param ListNode $head
     *
     * @return ListNode
     */
    function reverseList($head)
    {

        $first  = NULL;
        $second = $head;
        while ($second) {
            $next         = $second->next;
            $second->next = $first;
            $first        = $second;
            $second       = $next;
        }
        return $first;
    }

    //递归
    public function reverseList1($head)
    {
        if (empty($head) && empty($head->next)) {
            return $head;
        }
        $last = $this->reverseList1($head->next);
        $head->next->next = $head;
        $head->next = NULL;
        return $last;
    }


    //判断链表是否带环
    function judgeListIsRing($head)
    {
        $slow = $head;
        $fast = $head;

        while ($fast && $slow!=$fast) {

        }
    }

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome($head,$reverHead) {
        while(isset($head) && isset($reverHead)){
            if($head->val == $reverHead->val){
                $head = $head->next;
                $reverHead = $reverHead->next;
            }else{
                return false;
            }
        }
        return true;
    }


    /**
     * @param ListNode $head
     * @return Boolean
     */
    function deleteDuplicates($head) {
        $cur = $head;
        //遍历，如果遇到重复的就删除
        while($cur != null && $cur->next != null){
            if($cur->val == $cur->next->val) {
                $cur->next = $cur->next->next;
            }else{
                $cur = $cur->next;
            }
        }
        return $head;
    }

}

$l4 = new ListNode(1,NULL);
$l3 = new ListNode(1,$l4);
$l2 = new ListNode(2,$l3);
$l1 = new ListNode(1,$l2);

$k4 = new ListNode(1,NULL);
$k3 = new ListNode(1,$k4);
$k2 = new ListNode(2,$k3);
$k1 = new ListNode(1,$k2);

$s = new singlyList();
$s2 = $s->reverseList($k1);
var_dump($s->isPalindrome($l1,$s2));