<?php


class MyNode
{
    public $value;
    public $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = NULL;
    }

    public function getValue()
    {
        return $this->value;
    }
}