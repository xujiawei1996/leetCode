package test

import "fmt"

/**
给定仅有小写字母组成的字符串数组 A，返回列表中的每个字符串中都显示的全部字符（包括重复字符）组成的列表。例如，如果一个字符在每个字符串中出现 3 次，但不是 4 次，则需要在最终答案中包含该字符 3 次。

你可以按任意顺序返回答案。

示例 1：

输入：["bella","label","roller"]
输出：["e","l","l"]
示例 2：

输入：["cool","lock","cook"]
输出：["c","o"]
 */

func CommonChars(A []string) []string {
	res := make([]string, 0)
	//Alen := len(A)
	var strArr = make(map[int][]int,len(A))
	for k, str := range A {
		var chrArr = make([]int,26)
		for _,chr := range str {
			chrArr[chr-'a'] ++
		}
		strArr[k] = chrArr
	}
	for i:=0;i<26;i++{
		min := strArr[0][i]
		for k ,_ := range strArr{
			if min > strArr[k][i] {
				min = strArr[k][i]
			}
		}
		for j := 0; j < min; j++ {
			c := fmt.Sprintf("%c",i+'a')
			res = append(res,c)
		}
	}
	return res
}
