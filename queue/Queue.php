<?php


class Queue
{
    private $queue;
    private $limit;

    public function  __construct($limit = 10)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function enqueue($item)
    {
        if (count($this->queue) < $this->limit) {
            array_push($this->queue, $item);
        } else {
            throw new OverflowException("Queue is full");
        }
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty");
        } else {
            return array_shift($this->queue);
        }
    }


    public function peek()
    {
        return current($this->queue);
    }

    public function size()
    {
        return count($this->queue);
    }

    public function display()
    {
        echo implode(", ", $this->queue) . "\n";
    }
}
