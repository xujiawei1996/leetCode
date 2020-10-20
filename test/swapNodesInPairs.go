package test

/**
给定一个链表，两两交换其中相邻的节点，并返回交换后的链表。

你不能只是单纯的改变节点内部的值，而是需要实际的进行节点交换。
 */

/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */

type swapListNode struct {
    Val int
    Next *swapListNode
}

func swapPairs(head *swapListNode) *swapListNode {
	if head == nil {
		return nil
	}
	if head.Next == nil {
		return head
	}

	newHead := &swapListNode{0,head}
	tmp := newHead
	for tmp.Next != nil && tmp.Next.Next != nil{
		first := tmp
		second := tmp.Next
		tmp.Next = second
		tmp = first
		first.Next = second.Next
		second.Next = first
		//newHead.Next = first
		//first = second
	}
	return newHead.Next
}