<?php


class Binary
{
    protected $limit;
    protected $stack;

    public function __construct($limit)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($number)
    {
        $arr =[];
        for ($i = 0; $i < $number; $i++) {
            $result = (int)($number / 2);
            $number1 = $number % 2;
            $result2 = (int)($result / 2);
            $number2 = $result % 2;
            $number = $result2;
            array_push($arr,$number1,$number2);
        }
         $arrRev = array_reverse($arr);
        return implode("",$arrRev);
    }

}

$binary = new Binary(20);
echo ($binary->push(13));