package main

import (
	"fmt"
	"strings"
)

//func main() {
//	//res := test.DivingBoard(1,5,3)
//	//fmt.Println(res)
//	go println("hello world")
//
//}

func main() {
	res := strings.Split("",",")
	//var s = []string{}
	fmt.Println(res)
	le := len(res)
	fmt.Println(le)
	//A := make(chan bool, 1)
	//B := make(chan bool)
	//Exit := make(chan bool)
	//go func() {
	//	s := []int{1, 2, 3, 4}
	//	for i := 0; i < len(s); i++ {
	//		if ok := <-A; ok {
	//			fmt.Println("A: ", s[i])
	//			B <- true
	//		}
	//	}
	//}()
	//go func() {
	//	defer func() {
	//		close(Exit)
	//	}()
	//	s := []byte{'A', 'B', 'C', 'D'}
	//	for i := 0; i < len(s); i++ {
	//		if ok := <-B; ok {
	//			fmt.Printf("B: %c\n", s[i])
	//			A <- true
	//		}
	//	}
	//}()
	//A <- true
	//<-Exit
	//A := []string{"acabcddd","bcbdbcbd","baddbadb","cbdddcac","aacbcccd","ccccddda","cababaab","addcaccd"}
	////A := []string{"bella","label","roller"}
	//test.CommonChars(A)
	//name := "pyplrz"
	//typed := "ppyypllr"
	//res := test.IsLongPressedName(name,typed)
	//fmt.Println(res)
	//for k,i := range str{
	//	fmt.Println(k)
	//	fmt.Printf("%c\n",i)
	//	fmt.Println(str1[k])
	//}

	//s := "abcabcbb"
	//for _,chr := range s {
	//	println(chr - 'a')
	//}
	//res := test.LengthOfLongestSubstring(s)
	//fmt.Println(res)
	//k := 3
	//n := 9
	//res := test.CombinationSum3(k,n)
	//fmt.Println(res)
	//candidates := []int{1,1,2,2,3,4,7}
	//fmt.Println(candidates[4:5])
	//target := 4
	//res := test.CombinationSum2(candidates,target)
	//fmt.Println(res)
	//sl := []int{1,2,3,4,5}
	//dst := make([]int, 5)
	//copy(dst, sl)
	//n := 4
	//k := 3
	//res := test.Combine(n,k)
	//fmt.Println(res)
	//var wg sync.WaitGroup
	//wg.Add(3)
	//a,b := make(chan int ),make(chan int )
	//
	//go func() {
	//	defer wg.Done()
	//	for {
	//		select {
	//		case x,ok :=<-a:
	//			if !ok{
	//				a =nil
	//				break
	//			}
	//			println("a:",x)
	//
	//		case y,ok :=<-b:
	//			if !ok{
	//				b=nil
	//				break
	//			}
	//			println("b:",y)
	//
	//		}
	//		if a==nil && b==nil{
	//			return
	//		}
	//	}
	//}()
	//go func() {
	//	defer wg.Done()
	//	defer close(a)
	//	for i:=0;i<3;i++{
	//		a<-i
	//	}
	//}()
	//
	//go func() {
	//	defer wg.Done()
	//	defer close(b)
	//	for i:=0;i<3;i++{
	//		b<-i*10
	//	}
	//}()
	//wg.Wait()
}