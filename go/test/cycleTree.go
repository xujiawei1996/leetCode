package test

/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */

type CycleListNode struct{
    Val int
    Next *CycleListNode
}

func hasCycle(head *CycleListNode) bool {
	if head == nil || head.Next == nil{
		return false
	}
	first := head
	second := head.Next
	for second != nil && second.Next != nil {
		if first == second{
			return true
		}
		first = first.Next
		second = second.Next.Next
	}

	return false
}