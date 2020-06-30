package test

import (
	"strconv"
	"strings"
)

func XorOperation(n int, start int) int {
	var res int
	for i := 0; i < n; i++ {
		num := start + 2*i
		res = res ^ num
	}
	return res
}

var fileName = make(map[string]int, 0)

func getName(v string) string {
	var orgName string
	orai := strings.LastIndexAny(v, "(")
	if orai >= 0 {
		orgName = v[:orai]
		fileName[orgName]++
		fileName[v] = 1
		return v
	} else {
		if _, ok := fileName[v]; !ok {
			fileName[v] = 1
			return v
		} else {
			i := strings.LastIndexAny(v, "(")
			//orai := strings.IndexAny(v,"(")
			if i >= 0 {
				//name = v[:i]
				orgName = v[:i]
			} else {
				//name = v
				orgName = v
			}
			str := orgName + "(" + strconv.Itoa(fileName[v]) + ")"
			fileName[str] = fileName[v]
			return str
		}
	}
	return v
}

func GetFolderNames(names []string) []string {
	var res []string
	for _, v := range names {
		name := getName(v)
		res = append(res, name)
	}
	return res
}
