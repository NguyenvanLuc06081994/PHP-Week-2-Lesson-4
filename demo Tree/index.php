<?php

class BinaryNode
{
    public $value;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->value = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinaryTree
{
    protected $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function isEmpty()
    {
        return $this->root == null;
    }

    public function insert($data)
    {
        $newNode = new BinaryNode($data);
        if ($this->isEmpty()) {
            $this->root = $newNode;
        } else {
            $this->insertNode($newNode, $this->root);
        }
    }

    public function insertNode($node, $subtree)
    {
        if ($subtree === null) {
            // insert node here if subtree is empty
            $subtree = $node;
        } else {
            if ($node->value > $subtree->value) {
                // keep trying to insert right
                $this->insertNode($node, $subtree->right);
            } else if ($node->value < $subtree->value) {
                // keep trying to insert left
                $this->insertNode($node, $subtree->left);
            }
        }
    }

//    public function dump()
//    {
//        if ($this->left !== null) {
//            $this->left->dump();
//        }
//        var_dump($this->value);
//        if ($this->right !== null) {
//            $this->right->dump();
//        }
//    }
//
//    public function traverse()
//    {
//        // dump the tree rooted at "root"
//        $this->root->dump();
//    }


}
$tree = new BinaryTree();
$tree->insert(123);