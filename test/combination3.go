package test

/**
找出所有相加之和为 n 的 k 个数的组合。组合中只允许含有 1 - 9 的正整数，并且每种组合中不存在重复的数字。

说明：

所有数字都是正整数。
解集不能包含重复的组合。 
示例 1:

输入: k = 3, n = 7
输出: [[1,2,4]]
示例 2:

输入: k = 3, n = 9
输出: [[1,2,6], [1,3,5], [2,3,4]]

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/combination-sum-iii
*/
func CombinationSum3(k int, n int) [][]int {
	result := [][]int{}
	res := dts3(k, n, 1)
	for _,v := range res {
		if len(v) == k{
			result = append(result,v)
		}
	}
	return result
}

func dts3(k int, n int, start int) [][]int {
	res := [][]int{}
	for i := start; i < 10; i++ {
		if n <= 0 {
			continue
		} else if n < i || k == 0 {
			break
		} else if n == i {
			res = append(res, []int{i})
		}
		for _, v := range dts3(k-1, n-i, i+1) {
			res = append(res, append([]int{i}, v...))
		}
	}

	return res

}
