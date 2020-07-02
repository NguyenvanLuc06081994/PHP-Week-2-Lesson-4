<?php


class Binary
{
    protected $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function push($number)
    {
        $arr = [];
        while ($number > 0) {
            $result = (int)($number / 2);
            $number1 = $number % 2;
            $number = $result;
            array_unshift($arr, $number1);
        }
        return implode("", $arr);
    }

}
$binary = new Binary();
echo($binary->push(10));