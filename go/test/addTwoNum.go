package test

import "fmt"

type ListNode struct {
	Val  int
	Next *ListNode
}

func mainAdd() {
	l1 := &ListNode{}
	l2 := &ListNode{}
	node1 := &ListNode{}
	node2 := &ListNode{}
	for i := 1; i < 4; i++ {
		if node1.Next == nil && node1.Val == 0 {
			node1.Val = i
			l1 = node1
		} else {
			newNode := new(ListNode)
			newNode.Val = i
			node1.Next = newNode
			node1 = node1.Next
		}
	}
	for j := 5; j < 8; j++ {
		if node2.Next == nil && node2.Val == 0 {
			node2.Val = j
			l2 = node2
		} else {
			newNode := new(ListNode)
			newNode.Val = j
			node2.Next = newNode
			node2 = node2.Next
		}
	}

	res := addTwoNumbers(l1, l2)
	for ; res != nil; res = res.Next {
		fmt.Println(res.Val)
	}
	fmt.Println("111")
}

func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {
	resList := new(ListNode)
	node := resList
	carry := 0
	for l1 != nil || l2 != nil || carry > 0 {
		node.Next = new(ListNode)
		node = node.Next
		node.Val += carry
		if l1 != nil {
			node.Val += l1.Val
			l1 = l1.Next
		}
		if l2 != nil {
			node.Val += l2.Val
			l2 = l2.Next
		}
		carry = node.Val / 10
		node.Val = node.Val % 10
	}

	return resList.Next
}
