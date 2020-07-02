<?php


class MyStack1
{
    protected $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function checkSymmetry($str)
    {
        $arr = str_split($str);
        for ($i = 0; $i < count($arr) / 2; $i++) {
            if ($arr[$i] !== $arr[count($arr) - 1 - $i]) {
                return "chuoi khong doi xung";
            }
        }
        return "chuoi doi xung";
    }
}

$stack = new MYStack1();
echo $stack->checkSymmetry("ppo cba");
