<?php

class daba
{

    public $res = 0;

    function test($score,$count)
    {
        $this->dabadfs($score,$count);
        return $this->res;
    }

    function dabadfs($score, $count)
    {
        if ($count == 10 && $score == 90) {
            $this->res++;
        }

        if ($score > 90) {
            return;
        }
        if (10 * (10 - $count) + $score < 90) {
            return;
        }

        for ($i = 0; $i < 11; $i++) {
            $this->dabadfs($score + $i, $count + 1);
        }

    }
}

$s = new daba();
echo $s->test(0, 0);
