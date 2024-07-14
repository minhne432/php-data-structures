<?php

require_once './Node.php';

class LinkedList
{
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    //add new Node the the list
    public function append($data)
    {
        $newNode = new Node($data);

        // checks if the linked list is empty
        if ($this->head == null) {
            //if the list is empty, sets the $head property to the new node
            // making it the first node in the list.
            $this->head = $newNode;
            return;
        }

        $current = $this->head;

        while ($current->next !== null) {
            $current = $current->next;
        }

        $current->next = $newNode;
    }


    public function remove($data)
    {
        //case1;
        //check if the list is emtpy
        if ($this->head === null) {
            return;
        }

        //case2;
        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return;
        }

        //case3;
        $current = $this->head;
        while ($current->next !== null && $current->next->data !== $data) {
            $current = $current->next;
        }

        if ($current->next === null) {
            return;
        }

        $current->next = $current->next->next;
    }

    //Display the linkedlist
    public function display()
    {
        $current = $this->head;
        while ($current !== null) {
            echo "$current->data ->";
            $current = $current->next;
        }
        echo "\n";
    }


    //get the length of the linkedlist
    public function length()
    {
        $count = 0;
        $current = $this->head;
        while ($current !== null) {
            $count++;
            $current = $current->next;
        }

        return $count;
    }

    //findd a node by value
    public function find($data)
    {
        $current = $this->head;
        while ($current !== null) {
            if ($current->data === $data) {
                return $current;
            }
            $current = $current->next;
        }

        return null;
    }

    public function moveToNext()
    {
        if ($this->head !== null && $this->head->next !== null) {
            $this->head = $this->head->next;
        }
    }
}
