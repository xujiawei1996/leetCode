<?php
/**
 * 给你两个链表 list1 和 list2 ，它们包含的元素分别为 n 个和 m 个。
 *
 * 请你将 list1 中下标从 a 到 b 的全部节点都删除，并将list2 接在被删除节点的位置。
 *
 * 下图中蓝色边和节点展示了操作后的结果：
 *
 *
 * 请你返回结果链表的头指针。
 *
 *  
 *
 * 示例 1：
 *
 *
 *
 * 输入：list1 = [0,1,2,3,4,5], a = 3, b = 4, list2 = [1000000,1000001,1000002]
 * 输出：[0,1,2,1000000,1000001,1000002,5]
 * 解释：我们删除 list1 中下标为 3 和 4 的两个节点，并将 list2 接在该位置。上图中蓝色的边和节点为答案链表。
 * 示例 2：
 *
 *
 * 输入：list1 = [0,1,2,3,4,5,6], a = 2, b = 5, list2 = [1000000,1000001,1000002,1000003,1000004]
 * 输出：[0,1,1000000,1000001,1000002,1000003,1000004,6]
 * 解释：上图中蓝色的边和节点为答案链表。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode.cn/problems/merge-in-between-linked-lists
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

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

class Solution
{

    /**
     * @param ListNode $list1
     * @param Integer  $a
     * @param Integer  $b
     * @param ListNode $list2
     *
     * @return ListNode
     */
    function mergeInBetween($list1, $a, $b, $list2)
    {
        $newListStart = $list1;
        $newList2 = $list2;
        for ($i = 0; $i < $a-1 && $newListStart->next != NULL; $i++) {
            $newListStart = $newListStart->next;
        }

        $newListEnd = $newListStart;
        for ($i = $a-1; $i <= $b && $newListEnd->next != NULL; $i++) {
            $newListEnd = $newListEnd->next;
        }

        while ($newList2->next != NULL){
            $newList2 = $newList2->next;
        }

        //销毁空余的
        $del = $newListStart->next;
        while ($del != NULL) {
            $s = $del->next;
            unset($del);
            $del = $s;
        }

        $newListStart->next = $list2;
        $newList2->next = $newListEnd;
        return $list1;
    }
}

//list1 = [0,1,2,3,4,5], a = 3, b = 4, list2 = [1000000,1000001,1000002];
$l1 = new ListNode(5,NULL);
$l2 = new ListNode(4,$l1);
$l3 = new ListNode(3,$l2);
$l4 = new ListNode(2,$l3);
$l5 = new ListNode(1,$l4);
$l6 = new ListNode(0,$l5);

$l21 = new ListNode(1000002,NULL);
$l22 = new ListNode(1000001,$l21);
$l23 = new ListNode(1000000,$l22);

$s = new Solution();
$s->mergeInBetween($l6,3,4,$l23);
echo 11;