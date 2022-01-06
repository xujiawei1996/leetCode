package test

import (
	"encoding/json"
	"strconv"
	"strings"
)

//https://leetcode-cn.com/problems/maximum-length-of-repeated-subarray/
//给两个整数数组 A 和 B ，返回两个数组中公共的、长度最长的子数组的长度。

func getStr(B []int,start , end int) string {
	var res string
	s:=start
	for ;start <= end;start++ {
		res += strconv.Itoa(B[start])
		res += ","
	}
	if s == 0{
		return res[:len(res)-1]
	}else{
		return res
	}
}

func FindLength(A []int, B []int) int {
	end := len(A)-1
	start := end
	max := 0
	bStr,_ := json.Marshal(B)
	bStrs := string(bStr)
	bStrs = bStrs[1:len(bStrs)-1]
	for ;end>=start&&start>=0&&end>=0;start-- {
		aStrs := getStr(A,start,end)
		isExist := strings.Contains(bStrs, aStrs)
		if isExist {
			lens := strings.Count(aStrs, ",")
			if lens > max{
				max = lens
			}
		}else{
			end--
		}
	}
	return max
}