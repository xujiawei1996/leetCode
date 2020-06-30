package test

//import "fmt"

//func main()  {
//	var A = []int{1,2}
//	s := test.MaxScoreSightseeingPair(A)
//	fmt.Println(s)
//}

func MaxScoreSightseeingPair(A []int) int {
	ai := A[0]
	i := 0
	max := ai + i
	left := max
	for j := 1; j < len(A); j++ {
		if left+A[j]-j > max {
			max = left + A[j] - j
		}
		if left < A[j]+j {
			left = A[j] + j
		}
	}
	return max
}
