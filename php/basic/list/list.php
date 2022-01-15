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
        $temp = NULL;
        $cur = $head;
        $pre = NULL;

        while ($cur){
            $temp = $cur->next;
            $cur->next = $pre;
            $pre = $cur;
            $cur = $temp;
        }
        return $pre;
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


    //删除倒数第N个节点
    //https://leetcode-cn.com/problems/remove-nth-node-from-end-of-list/
    function removeNthFromEnd($head, $n) {
        $newHead = new ListNode();
        $newHead->next = $head;
        $fast = $newHead;
        $slow = $newHead;

        while ($n-- && $fast!= NULL){
            $fast = $fast->next;
        }
        //为了拿到上一个节点
        $fast = $fast->next;
        //快慢指针
        while ($fast != NULL){
            $slow = $slow->next;
            $fast = $fast->next;
        }
        $slow->next = $slow->next->next;
        return $newHead->next;
    }


    /**
     * https://leetcode-cn.com/problems/linked-list-cycle-ii/
     * @param ListNode $head
     * @return ListNode
     */
    function detectCycle($head)
    {
        $newHead = $head;
        $intersection = NULL;
        $slow = $head;
        $fast = $head;

        while ($slow != NULL && $fast != NULL){
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow == $fast){
                $intersection = $slow;
                break;
            }
        }

        while ($newHead != NULL && $intersection != NULL){
            if ($newHead == $intersection){
                return $newHead;
            }
            $newHead = $newHead->next;
            $intersection = $intersection->next;
        }

        return NULL;
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