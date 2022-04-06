<?php
/**
 * 请你仅使用两个队列实现一个后入先出（LIFO）的栈，并支持普通栈的全部四种操作（push、top、pop 和 empty）。
 *
 * 实现 MyStack 类：
 *
 * void push(int x) 将元素 x 压入栈顶。
 * int pop() 移除并返回栈顶元素。
 * int top() 返回栈顶元素。
 * boolean empty() 如果栈是空的，返回 true ；否则，返回 false 。
 *  
 *
 * 注意：
 *
 * 你只能使用队列的基本操作 —— 也就是 push to back、peek/pop from front、size 和 is empty 这些操作。
 * 你所使用的语言也许不支持队列。 你可以使用 list （列表）或者 deque（双端队列）来模拟一个队列 , 只要是标准的队列操作即可。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/implement-stack-using-queues
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 *
 *
 */

class MyStack
{
    /**
     * 只用一个队列就够了，每次把出对列的元素再次加入队列中
     */
    public $queue1;

    function __construct()
    {
        $this->queue1 = new SplQueue();
    }

    /**
     * @param Integer $x
     *
     * @return NULL
     */
    function push($x)
    {
        $this->queue1->enqueue($x);
    }

    /**
     * @return Integer
     */
    function pop()
    {
        $size = $this->queue1->count();
        while ($size > 1) {
            $this->queue1->enqueue($this->queue1->dequeue());
            $size--;
        }
        $val = $this->queue1->dequeue();
        return $val;
    }

    /**
     * @return Integer
     */
    function top()
    {
        return $this->queue1->top() ?? NULL;
    }

    /**
     * @return Boolean
     */
    function empty()
    {
        return $this->queue1->isEmpty();
    }
}

/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */
$obj = new MyStack();
$obj->push(1);
$obj->push(2);
$ret_2 = $obj->top();
$ret_3 = $obj->pop();
$ret_4 = $obj->empty();
var_dump($ret_3);
//var_dump($ret_3);
//var_dump($ret_4);