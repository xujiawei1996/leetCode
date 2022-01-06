package test

//两个栈实现一个队列
/*
用两个栈实现一个队列。队列的声明如下，请实现它的两个函数 appendTail 和 deleteHead ，分别完成在队列尾部插入整数和在队列头部删除整数的功能。(若队列中没有元素，deleteHead 操作返回 -1 )

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/yong-liang-ge-zhan-shi-xian-dui-lie-lcof
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
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
