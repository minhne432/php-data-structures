<?php
require './Node.php';


class LinkedList
{
    private $head;

    public function __construct()
    {
        $this->head = null;
    }



    //add new Node to the list
    public function append($data)
    {
        $newNode = new Node($data);

        if ($this->head == null) {      //Checks if the linked list is empty.
            $this->head = $newNode;     // If the list is empty, sets the $head property to the new node, making it the first node in the list.
            return;
        }

        $current = $this->head;
        while ($current->next !== null) {
            $current = $current->next;  // Corrected typo
        }

        $current->next = $newNode;
    }

    public function remove($data)
    {

        //case 1;
        if ($this->head === null) {
            return;
        }

        //case 2;
        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return;
        }

        //case 3;
        $current = $this->head;
        while ($current->next !== null && $current->next->data === $data) {
            $current = $current->next;
        }

        $current->next = $current->next->next;
    }


    public function display()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . "->";
            $current = $current->next;
        }

        echo "null\n";
    }

    public function length()
    {
        $count = 0;
        $current = $this->head;
        while ($current != null) {
            $count++;
            $current = $current->next;
        }

        return $count;
    }

    public function find($data)
    {
        $current = $this->head;
        while ($current !== null) {
            if ($current->data === $data) {
                return $current;
            }
            $current = $current->next;
        }

        //null is returned when $current === null and ($current->data === $data) expression  is allway flase.
        return null;
    }



    public function getFirst()
    {
        if ($this->head !== null) {
            return $this->head->data;
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
