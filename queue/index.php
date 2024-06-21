<?php

require_once './Queue.php';

$queue = new Queue(5);

$queue->enqueue("A");
$queue->enqueue("B");
$queue->enqueue("C");

echo "Queue after enqueuing A, B, C: <br>";
$queue->display();

echo "<br>Front item is: " . $queue->peek() . "\n";

echo "<br>Dequeued item: " . $queue->dequeue() . "\n";

echo "<br>Queue after dequeuing:<br>";
$queue->display();


// Enqueue more items
$queue->enqueue("D");
$queue->enqueue("E");
$queue->enqueue("F");

echo "Queue after enqueuing D, E, F:<br>";
$queue->display(); // Output: B, C, D, E, F

// Check if queue is full
try {
    $queue->enqueue("G");
} catch (OverflowException $e) {
    echo $e->getMessage() . "<br>"; // Output: Queue is full
}

// Check if queue is empty
echo $queue->isEmpty() ? "Queue is empty<br>" : "Queue is not empty<br>"; // Output: Queue is not empty

// Get the current size of the queue
echo "Current size of the queue: " . $queue->size() . "<br>"; // Output: 5