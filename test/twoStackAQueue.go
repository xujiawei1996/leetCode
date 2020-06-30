package test

//两个栈实现一个队列
type CQueue struct {
	stackIn  stack
	stackOut stack
}

type stack []int

func Constructor() CQueue {
	return CQueue{}
}

func (s *stack) push(value int) {
	*s = append(*s, value)
}

func (s *stack) pop() int {
	n := len(*s)
	res := (*s)[n-1]
	*s = (*s)[:n-1]
	return res
}

func (this *CQueue) AppendTail(value int) {
	this.stackIn.push(value)
}

func (this *CQueue) DeleteHead() int {
	if len(this.stackOut) != 0 {
		return this.stackOut.pop()
	}else if len(this.stackIn) != 0{
		for len(this.stackIn) != 0 {
			this.stackOut.push(this.stackIn.pop())
		}
		return this.stackOut.pop()
	}
	return -1
}

/**
 * Your CQueue object will be instantiated and called as such:
 * obj := Constructor();
 * obj.AppendTail(value);
 * param_2 := obj.DeleteHead();
 */
