<?php

/**
 * 请你仅使用两个栈实现先入先出队列。队列应当支持一般队列支持的所有操作（push、pop、peek、empty）：
 *
 * 实现 MyQueue 类：
 *
 * void push(int x) 将元素 x 推到队列的末尾
 * int pop() 从队列的开头移除并返回元素
 * int peek() 返回队列开头的元素
 * boolean empty() 如果队列为空，返回 true ；否则，返回 false
 * 说明：
 *
 * 你 只能 使用标准的栈操作 —— 也就是只有 push to top, peek/pop from top, size, 和 is empty 操作是合法的。
 * 你所使用的语言也许不支持栈。你可以使用 list 或者 deque（双端队列）来模拟一个栈，只要是标准的栈操作即可。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/implement-queue-using-stacks
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

class MyQueue
{
    /**
     */
    public $stack1;
    public $stack2;

    function __construct()
    {
        $this->stack1 = new SplStack();
        $this->stack2 = new SplStack();
    }

    /**
     * @param Integer $x
     *
     * @return NULL
     */
    function push($x)
    {
        $this->stack1->push($x);
    }

    /**
     * @return Integer
     */
    function pop()
    {
        //从栈1取元素往栈2
        while (!$this->stack1->isEmpty()) {
            $this->stack2->push($this->stack1->pop());
        }
        $val = $this->stack2->pop();
        while (!$this->stack2->isEmpty()) {
            $this->stack1->push($this->stack2->pop());
        }
        return $val ?? NULL;
    }

    /**
     * @return Integer
     */
    function peek()
    {
        //从栈1取元素往栈2
        while (!$this->stack1->isEmpty()) {
            $val = $this->stack1->pop();
            $this->stack2->push($val);
        }
        while (!$this->stack2->isEmpty()) {
            $this->stack1->push($this->stack2->pop());
        }
        return $val ?? NULL;
    }

    /**
     * @return Boolean
     */
    function empty()
    {
        return $this->stack1->isEmpty();
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */
$x = 3;
$s = new MyQueue();
$s->push(1);
$s->push(2);
$ret_2 = $s->peek();
$ret_3 = $s->pop();
$ret_4 = $s->empty();
var_dump($ret_2);
var_dump($ret_3);
var_dump($ret_4);