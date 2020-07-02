<?php


class Stack1
{
    protected $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function push($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            array_unshift($this->stack, $arr[$i]);
        }
    }

    public function reserve($arr)
    {
        $arrNew = [];
        for ($i = 0; $i < count($arr); $i++) {
            $result = array_shift($this->stack);
            array_push($arrNew,$result);
        }
        return $arrNew;
    }


}
$arr = [1,2,34,3,44];
$stack = new Stack1();
$stack->push($arr);
echo "<pre>";
print_r($stack->reserve($arr));



