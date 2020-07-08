package test

/**
https://leetcode-cn.com/problems/diving-board-lcci/

你正在使用一堆木板建造跳水板。有两种类型的木板，其中长度较短的木板长度为shorter，长度较长的木板长度为longer。你必须正好使用k块木板。编写一个方法，生成跳水板所有可能的长度。

返回的长度需要从小到大排列。

示例：

输入：
shorter = 1
longer = 2
k = 3
输出： {3,4,5,6}

 */

func DivingBoard(shorter int, longer int, k int) []int {
	var res = make([]int,k+1)
	var num1,num2 int
	if k <= 0{
		return []int{}
	}

	if shorter == longer {
		return []int{shorter*k}
	}

	for i:=k;i>=k/2;i--{
		num1 = i*shorter + (k-i) * longer
		num2 = i*longer + (k-i) * shorter
		res[k-i] = num1
		res[i] = num2
	}
	return res
}

/**
func main() {
	res := test.DivingBoard(1,5,3)
	fmt.Println(res)
}
 */
