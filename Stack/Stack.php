<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = array();
        $this->limit = $limit;
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
            die('Stack is full!');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            die("Stack is empty");
        } else {
            array_shift($this->stack);
        }
    }

    public function getStack()
    {
        return $this->stack;
    }

    public function top()
    {
        return current($this->stack);
    }
}

$stack = new Stack(5);
$stack->push(10);
$stack->push(5);
$stack->push(10);
$stack->push(10);
$stack->pop();
$stack->pop();
echo $stack->top();
echo "<br>";


echo "<pre>";
print_r($stack->getStack());