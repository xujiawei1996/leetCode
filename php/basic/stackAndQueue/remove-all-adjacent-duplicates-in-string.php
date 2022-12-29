<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicates($s) {
        $stack = new SplStack();
        for ($i = 0;$i<strlen($s);$i++){
            if ($stack->isEmpty()){
                $stack->push($s[$i]);
                continue;
            }
            if ($stack->top() == $s[$i]){
                $stack->pop();
            }else{
                $stack->push($s[$i]);
            }
        }

        $res = "";
        while (!$stack->isEmpty()){
            $res = $stack->pop().$res;
        }
        return $res;
    }
}

$s = new Solution();
echo $s->removeDuplicates('abbacaab');