<?php

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

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function reverseKGroup($head, $k) {
            $cur = $head;
            for($i = 0; $i < $k; $i++)
            {
                if(!$cur) {
                    return $head;
                } else {
                    $cur = $cur->next;
                }
            }
            $curr = $this->reverse($head, $k);
            $next = $this->reverseKGroup($cur, $k);
            $head->next = $next;
            return $curr;
        }

        function reverse($cur, $k)
        {
            $pre = null;
            while ($k)
            {
                $nxt = $cur->next;
                $cur->next = $pre;
                $pre = $cur;
                $cur = $nxt;
                $k--;
            }
            return $pre;
        }

}