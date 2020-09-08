package test

import (
	"fmt"
	"os/exec"
)

func Max() {
	//return 1
	cmd0 := exec.Command("echo","-n","hello world")
	if err := cmd0.Start();err != nil{
		fmt.Println("111")
		return
	}
}
