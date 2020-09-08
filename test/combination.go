package test

/**
给定两个整数 n 和 k，返回 1 ... n 中所有可能的 k 个数的组合。

示例:

输入: n = 4, k = 2
输出:
[
  [2,4],
  [3,4],
  [2,3],
  [1,2],
  [1,3],
  [1,4],
]

链接：https://leetcode-cn.com/problems/combinations
*/

func Combine(n int, k int) [][]int {
	ret := [][]int{}
	if n <= 0 || k <= 0 || n < k {
		return ret
	}
	sl := make([]int, k)
	dfs(n, k, 1, sl, &ret)
	return ret
}

func dfs(n, k, start int, sl []int, ret *[][]int) {
	l := len(sl)
	for i := start; i <= n; i++ {
		if k == 1 {
			sl[l-1] = i
			dst := make([]int, l)
			copy(dst, sl)
			*ret = append(*ret, dst)
		} else {
			sl[l-k] = i
			dfs(n, k-1, i+1, sl, ret)
		}
	}
}
