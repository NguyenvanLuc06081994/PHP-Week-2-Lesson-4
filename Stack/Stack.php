<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stack = array();
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function push($data)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $data);
        } else {
            die("Stack is Full");
        }

    }

    public function pop()
    {
        if ($this->isEmpty()) {
            die("Empty Stack");
        } else {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function getStack()
    {
        return $this->stack;
    }

}

$stack = new Stack(10);
$stack->push(10);
$stack->push(5);
$stack->push(120);
$stack->push(150);
//$stack->pop();
//$stack->pop();
echo $stack->top();
echo "<br>";


echo "<pre>";
print_r($stack->getStack());