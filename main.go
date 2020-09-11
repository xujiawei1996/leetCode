package main

import (
	"fmt"
	"leetcode/test"
)

//func main() {
//	//res := test.DivingBoard(1,5,3)
//	//fmt.Println(res)
//	go println("hello world")
//
//}

func main() {
	k := 3
	n := 9
	res := test.CombinationSum3(k,n)
	fmt.Println(res)
	//candidates := []int{1,1,2,2,3}
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