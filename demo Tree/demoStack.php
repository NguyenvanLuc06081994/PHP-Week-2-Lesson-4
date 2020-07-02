<?php
class MyStack{
    public $stack;
    public $limit;
    public $top;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stack = array();
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }


    public function isFull()
    {
        return count($this->stack) >= $this->limit;

    }

    public function push($value)
    {
        if ($this->isFull()){
            die("Full");
        }else{
//            array_unshift($this->stack,$value);
            $this->top++;
            $this->stack[$this->top] = $value;
        }
    }

    public function pop()
    {
        if ($this->isEmpty()){
            die("empty");
        }else{
            array_pop($this->stack);
        }
        $this->top--;
    }

    public function getStack()
    {
        return $this->stack;
    }

}
$test = new MyStack(10);
$test->push(1);
$test->push(2);
$test->push(3);
$test->push(4);
$test->push(5);
$test->push(6);
$test->push(7);
$test->push(8);
$test->pop();
print_r($test->getStack());