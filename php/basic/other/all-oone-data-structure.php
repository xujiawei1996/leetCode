<?php


//https://leetcode-cn.com/problems/all-oone-data-structure/

/**
 * 请你设计一个用于存储字符串计数的数据结构，并能够返回计数最小和最大的字符串。
 *
 * 实现 AllOne 类：
 *
 * AllOne() 初始化数据结构的对象。
 * inc(String key) 字符串 key 的计数增加 1 。如果数据结构中尚不存在 key ，那么插入计数为 1 的 key 。
 * dec(String key) 字符串 key 的计数减少 1 。如果 key 的计数在减少后为 0 ，那么需要将这个 key 从数据结构中删除。测试用例保证：在减少计数前，key 存在于数据结构中。
 * getMaxKey() 返回任意一个计数最大的字符串。如果没有元素存在，返回一个空字符串 "" 。
 * getMinKey() 返回任意一个计数最小的字符串。如果没有元素存在，返回一个空字符串 "" 。
 *  
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/all-oone-data-structure
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

//实话实说，这种方法不是O1，因为用到了sort
class AllOne
{

    public $object;
    public $count;

    /**
     */
    function __construct()
    {
        //object['a'=>1,'b'=>1]
        $this->object = [];
        //count[1=>['a'=>true,'b'=>true]]
        $this->count = [];
    }

    /**
     * @param String $key
     *
     * @return NULL
     */
    function inc($key)
    {
        //如果存在，增加object
        if (isset($this->object[$key])) {
            $orgNum = $this->object[$key];
            $this->object[$key]++;
            $this->count[$this->object[$key]][$key] = true;
            unset($this->count[$orgNum][$key]);
            if (empty($this->count[$orgNum])) {
                unset($this->count[$orgNum]);
            }
        } else {
            $this->object[$key]                     = 1;
            $this->count[$this->object[$key]][$key] = true;
        }
        ksort($this->count);
    }

    /**
     * @param String $key
     *
     * @return NULL
     */
    function dec($key)
    {
        //如果存在，且大于1
        if (isset($this->object[$key]) && $this->object[$key] > 1) {
            $orgNum = $this->object[$key];
            $this->object[$key]--;
            $this->count[$this->object[$key]][$key] = true;
            unset($this->count[$orgNum][$key]);
            if (empty($this->count[$orgNum])) {
                unset($this->count[$orgNum]);
            }
        } else if (isset($this->object[$key]) && $this->object[$key] == 1) {
            $orgNum = $this->object[$key];
            unset($this->object[$key]);
            unset($this->count[$orgNum][$key]);
            if (empty($this->count[$orgNum])) {
                unset($this->count[$orgNum]);
            }
        }
        ksort($this->count);
    }

    /**
     * @return String
     */
    function getMaxKey()
    {
        reset($this->count);
        return !empty(end($this->count)) ? key(end($this->count)) : '';
    }

    /**
     * @return String
     */
    function getMinKey()
    {
        reset($this->count);
        return !empty(current($this->count)) ? key(current($this->count)) : '';
    }
}


//还是用双向链表+hash好 todo

/**
 * Your AllOne object will be instantiated and called as such:
 * $obj = AllOne();
 * $obj->inc($key);
 * $obj->dec($key);
 * $ret_3 = $obj->getMaxKey();
 * $ret_4 = $obj->getMinKey();
 */
$obj = new AllOne();
$obj->inc('a');
$obj->inc('c');

$obj->inc('a');
$obj->inc('a');

//$obj->dec('b');
//$obj->inc('c');
//$obj->inc('c');
//$obj->inc('c');
//$obj->inc('d');

//$obj->inc('d');
var_dump($obj->count);
var_dump($obj->object);
echo $obj->getMaxKey();
echo $obj->getMinKey();