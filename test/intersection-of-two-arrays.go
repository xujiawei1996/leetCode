package test

import (
	"sort"
)

/**
给定两个数组，编写一个函数来计算它们的交集。
示例 1：

输入：nums1 = [1,2,2,1], nums2 = [2,2]
输出：[2]
示例 2：

输入：nums1 = [4,9,5], nums2 = [9,4,9,8,4]
输出：[9,4]

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/intersection-of-two-arrays
*/

func intersection(nums1 []int, nums2 []int) []int {
	var res []int
	sort.Ints(nums1)
	sort.Ints(nums2)
	i := 0
	j := 0
	for ; i < len(nums1) && j < len(nums2); {
		if nums1[i] == nums2[j] {
			if i > 1 && nums1[i] == nums1[i-1]{
				continue
			}
			res = append(res, nums1[i])
			i++
			j++
		} else if nums1[i] > nums2[j] {
			j++
		} else {
			i++
		}
	}
	return res
}
