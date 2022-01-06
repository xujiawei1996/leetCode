<?php

/**
 * Class implementRand
 *
 * https://leetcode-cn.com/problems/implement-rand10-using-rand7/
 */
class implementRand {
    /**
     * @param
     * @return Integer
     */
    function rand7()
    {
        return mt_rand(1,7);
    }

    function rand10() {
        while (true) {
            $num = $this->rand7()-1*7+$this->rand7();
            if ($num <= 40) return 1+$num%10;
            $num = ($num-40-1)*7+$this->rand7();
            if ($num<=60) return 1+$num%10;
            $num = ($num-20-1)*7+$this->rand7();
            if ($num<=20) return 1+$num%10;
        }
    }
}