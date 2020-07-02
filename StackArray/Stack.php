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

    public function pop($arr)
    {
        $arrNew = [];
        for ($i = 0; $i < count($arr); $i++) {
            $result = array_shift($this->stack);
            array_push($arrNew,$result);
        }
        return $arrNew;
    }

    public function getStack()
    {
        return $this->stack;
    }
}
$arr = [1,2,3];
$stack = new Stack1();
$stack->push($arr);
echo "<pre>";
print_r($stack->getStack());

echo "<pre>";
print_r($stack->pop($arr));

