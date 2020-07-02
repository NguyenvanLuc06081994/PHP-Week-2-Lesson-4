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
        while ($number > 0) {
            $result = (int)($number / 2);
            $number1 = $number % 2;
            $number = $result;
            array_push($arr,$number1);
        }
         $arrRev = array_reverse($arr);
        return implode("",$arrRev);
    }

}

$binary = new Binary(20);
echo ($binary->push(100));