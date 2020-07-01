<?php
include_once("MyNode.php");

class MyQueue
{
    protected $front;
    protected $back;

    public function __construct()
    {
        $this->front = NULL;
        $this->back = NULL;
    }

    public function isEmpty()
    {
        return $this->front === NULL;
    }

    public function enqueue($value)
    {
        $newNode = new MyNode($value);
        if ($this->isEmpty()) {
            $this->front = $newNode;
            if ($this->back == NULL) ;
            $this->back = $newNode;
        } else {
            $this->back->next = $newNode;
            $this->back = $newNode;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            die("Empty Queue");
        } else {
            $this->front = $this->front->next;
        }
    }

    public function displayNode()
    {
        $list = array();
        $current = $this->front;
        while ($current != NULL) {
            array_push($list, $current->getValue());
            $current = $current->next;
        }
        return $list;
    }

}

$myList = new MyQueue();
$myList->enqueue(1);
$myList->enqueue(2);
$myList->enqueue(2);

var_dump($myList->isEmpty());
echo "<pre>";
print_r($myList->displayNode());
echo "</pre>";
