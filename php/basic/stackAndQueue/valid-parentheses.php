<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = new SplStack();
        for ($i=0;$i<strlen($s);$i++){
            if ($s[$i] == '(' ||
                $s[$i] == '[' ||
                $s[$i] == '{'){
                $stack->push($s[$i]);
            }else{
                if ($stack->isEmpty()){
                    return false;
                }
                $ss = $stack->pop();
                if (($ss == '(' && $s[$i] == ')') ||
                    ($ss == '[' && $s[$i] == ']') ||
                    ($ss == '{' && $s[$i] == '}')){
                    continue;
                }else{
                    return false;
                }
            }
        }

        return $stack->isEmpty();
    }
}