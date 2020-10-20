package test

/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */

type recorderListNode struct {
	Val  int
	Next *recorderListNode
}

func reorderList(head *recorderListNode) *recorderListNode {
	var recorderListNodeArr = []recorderListNode{}
	res := &recorderListNode{0, head}
	s := res
	h := head
	for h != nil {
		recorderListNodeArr = append(recorderListNodeArr, *h)
		h = h.Next
	}
	recorderListLen := len(recorderListNodeArr)
	for i := 0; i <= recorderListLen/2; i++ {
		res.Next = &recorderListNodeArr[i]
		res = res.Next
		res.Next = &recorderListNodeArr[recorderListLen-i]
		recorderListNodeArr = recorderListNodeArr[i : recorderListLen-i]
	}
	return s.Next
}
