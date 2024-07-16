<?php

class Node
{
  public $value;
  public $children;

  public function __construct($value)
  {
    $this->value = $value;
    $this->children = [];
  }

  public function addChild(Node $child)
  {
    $this->children[] = $child;
  }
}


class Tree
{
  public $root;

  public function __construct(Node $root)
  {
    $this->root = $root;
  }

  public function traverse(Node $node)
  {
    if ($node == null) {
      return;
    }

    echo $node->value . " ";

    foreach ($node->children as $child) {
      $this->traverse($child);
    }
  }
}

//Create nodes
$root = new Node("Root");
$child1 = new Node("Child 1");
$child2 = new Node("Child 2");
$child3 = new Node("Child 3");
$child4 = new Node("Child 4");

//build the tree structure
$root->addChild($child1);
$root->addChild($child2);
$child1->addChild($child3);
$child1->addChild($child4);

//create the tree
$tree = new Tree($root);

//traverse the tree
$tree->traverse($root);
