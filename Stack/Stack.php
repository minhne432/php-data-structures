<?php


class Stack
{
    private $stack;
    private $limit;

    public function __construct($limit = 10)
    {
        //initialize the stack
        $this->stack = [];
        //stack size limit
        $this->limit = $limit;
    }

    public function isEmpty()
    {
        if (count($this->stack) > 0) {
            return false;
        } else {
            return true;
        }
    }

    //add an item to the stack
    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_push($this->stack, $item);
        } else {
            throw new OverflowException("Stack is full!");
        }
    }

    //remove and return the top item in the stack
    public function pop()
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Stack is Empty");
        } else {
            return array_pop($this->stack);
        }
    }
}
