package main

import (
	"fmt"
	"leetcode/test"
)

func main() {
	//res := test.XorOperation(10,5)
	//fmt.Println(res)
	names := []string{"wano", "wano", "wano", "wano"}
	res := test.GetFolderNames(names)
	fmt.Println(res)
}

//
//import (
//	"fmt"
//	//gp "github.com/howeyc/gopass"
//	"golang.org/x/crypto/ssh/terminal"
//	"io"
//	"os"
//)
//
//type terminalState struct {
//	state *terminal.State
//}
//
//var defaultGetCh = func(r io.Reader) (byte, error) {
//	buf := make([]byte, 1)
//	if n, err := r.Read(buf); n == 0 || err != nil {
//		if err != nil {
//			return 0, err
//		}
//		return 0, io.EOF
//	}
//	return buf[0], nil
//}
//
//func isTerminal(fd uintptr) bool {
//	return terminal.IsTerminal(int(fd))
//}
//
//func getPasswd() []byte {
//	r := os.Stdin
//	w := os.Stdout
//	var pass []byte
//	//退格
//	var bs = []byte("\b \b")
//	var oldState = &terminalState{}
//	var err error
//	if isTerminal(r.Fd()) {
//		if oldState, err = makeRaw(r.Fd()); err != nil {
//			return pass
//		} else {
//			defer func() {
//				restore(r.Fd(), oldState)
//				fmt.Fprintln(w)
//			}()
//		}
//	}
//	var counter int
//	maxLength := 512
//	for counter = 0; counter <= maxLength; counter++ {
//		v, _ := defaultGetCh(r)
//		if v == 127 || v == 8 { //127 del 8 退格
//			l := len(pass)
//			if l > 0 {
//				pass = pass[:l-1]
//				fmt.Fprint(w, string(bs))
//			}
//		} else if v == 13 || v == 10 { //13回车 10换行
//			break
//		} else if v == 3 { //正文结束
//			break
//		} else if v != 0 { //其他字符
//			pass = append(pass, v)
//			fmt.Fprint(w, string(v))
//		}
//	}
//	return pass
//}
//
//func main() {
//	//s1,_ := gp.GetPasswdMasked()
//	//fmt.Println(string(s1))
//	//s2,_ := gp.GetPasswd()
//	//fmt.Println(string(s2))
//	//s3,_ := gp.GetPasswdPrompt("请输入密码",true,os.Stdin,os.Stdout)
//	//fmt.Println(string(s3))
//	//oldState := terminalState{}
//	//var str string
//	//var bt []byte
//	//r := os.Stdout
//	//oldState := terminal.NewTerminal(r,"")
//	//str,_ := oldState.ReadLine()
//	//fmt.Println(string(getPasswd()))
//	//fmt.Println(str)
//	//var counter int
//	//for counter = 0; counter <= maxLength; counter++ {
//	//	if v, e := getch(r); e != nil {
//	//		err = e
//	//		break
//	//	} else if v == 127 || v == 8 {
//	//		if l := len(pass); l > 0 {
//	//			pass = pass[:l-1]
//	//			fmt.Fprint(w, string(bs))
//	//		}
//	//	} else if v == 13 || v == 10 {
//	//		break
//	//	} else if v == 3 {
//	//		err = ErrInterrupted
//	//		break
//	//	} else if v != 0 {
//	//		pass = append(pass, v)
//	//		fmt.Fprint(w, string(mask))
//	//	}
//	//}
//	//s2,_ := gopass.GetPasswdMasked()
//	//fmt.Println(string(s2))
//	//s3,_ := gopass.GetPasswdPrompt("请输入密码",false,os.Stdin,os.Stdout)
//	//fmt.Println(string(s3))
//}
//
//func makeRaw(fd uintptr) (*terminalState, error) {
//	state, err := terminal.MakeRaw(int(fd))
//
//	return &terminalState{
//		state: state,
//	}, err
//}
//
//func restore(fd uintptr, oldState *terminalState) error {
//	return terminal.Restore(int(fd), oldState.state)
//}
