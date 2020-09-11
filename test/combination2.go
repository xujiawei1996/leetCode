package test

import "sort"

/**
给定一个数组 candidates 和一个目标数 target ，找出 candidates 中所有可以使数字和为 target 的组合。

candidates 中的每个数字在每个组合中只能使用一次。

说明：

所有数字（包括目标数）都是正整数。
解集不能包含重复的组合。 
示例 1:

输入: candidates = [10,1,2,7,6,1,5], target = 8,
所求解集为:
[
  [1, 7],
  [1, 2, 5],
  [2, 6],
  [1, 1, 6]
]
示例 2:

输入: candidates = [2,5,2,1,2], target = 5,
所求解集为:
[
  [1,2,2],
  [5]
]

链接：https://leetcode-cn.com/problems/combination-sum-ii
*/
func     CombinationSum2(candidates []int, target int) [][]int {
	sort.Ints(candidates)
	return dfs2(candidates, target)
}

func dfs2(arr []int, target int) [][]int {
	res := [][]int{}
	for k, v := range arr {
		if k > 0 && arr[k-1] == v{
			continue
		} else if target < v {
			break
		}else if target == v{
			res = append(res,[]int{v})
		}

		for _,v2 := range dfs2(arr[k+1:],target-v) {
			res = append(res,append([]int{v},v2...))
		}
	}
	return res
}
