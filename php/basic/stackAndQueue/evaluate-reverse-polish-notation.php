<?php
class Solution {

    /**
     * @param String[] $tokens
     * @return Integer
     */
    function evalRPN($tokens) {
        $stack = new SplStack();
        for ($i = 0;$i<count($tokens);$i++){
            if (is_numeric($tokens[$i])){
                $stack->push($tokens[$i]);
            }else{
                $num2 = $stack->pop();
                $num1 = $stack->pop();
                switch ($tokens[$i]){
                    case '+':
                        $stack->push($num1+$num2);
                        break;
                    case '-':
                        $stack->push($num1-$num2);
                        break;
                    case '*':
                        $stack->push($num1*$num2);
                        break;
                    case '/':
                        $stack->push(intval($num1/$num2));
                        break;
                }
            }
        }
        return $stack->pop();
    }
}

$num = ["10","6","9","3","+","-11","*","/","*","17","+","5","+"];
$s = new Solution();
echo $s->evalRPN($num);