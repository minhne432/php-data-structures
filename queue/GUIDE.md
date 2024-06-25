Sure! A queue is a linear data structure that follows the First In, First Out (FIFO) principle. Below is a guide to implementing a queue in PHP.

### Step-by-Step Guide to Implement a Queue in PHP

#### 1. Define the Queue Class

First, define a `Queue` class with necessary methods like `enqueue`, `dequeue`, `peek`, and `isEmpty`.

```php
class Queue {
    private $queue;
    private $limit;

    public function __construct($limit = 10) {
        // Initialize the queue
        $this->queue = [];
        // Queue size limit
        $this->limit = $limit;
    }

    // Add an item to the end of the queue
    public function enqueue($item) {
        if (count($this->queue) < $this->limit) {
            array_push($this->queue, $item);
        } else {
            throw new OverflowException("Queue is full");
        }
    }

    // Remove and return the item from the front of the queue
    public function dequeue() {
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty");
        } else {
            return array_shift($this->queue);
        }
    }

    // Return the item at the front without removing it
    public function peek() {
        return current($this->queue);
    }

    // Check if the queue is empty
    public function isEmpty() {
        return empty($this->queue);
    }

    // Get the current size of the queue
    public function size() {
        return count($this->queue);
    }

    // Display the queue
    public function display() {
        echo implode(", ", $this->queue) . "\n";
    }
}
```

#### 2. Example Usage

Here's how you can use the `Queue` class to perform queue operations.

```php
$queue = new Queue(5);

// Enqueue items into the queue
$queue->enqueue("A");
$queue->enqueue("B");
$queue->enqueue("C");

echo "Queue after enqueuing A, B, C:\n";
$queue->display(); // Output: A, B, C

// Peek the front item
echo "Front item is: " . $queue->peek() . "\n"; // Output: A

// Dequeue items from the queue
echo "Dequeued item: " . $queue->dequeue() . "\n"; // Output: A

echo "Queue after dequeuing:\n";
$queue->display(); // Output: B, C

// Enqueue more items
$queue->enqueue("D");
$queue->enqueue("E");
$queue->enqueue("F");

echo "Queue after enqueuing D, E, F:\n";
$queue->display(); // Output: B, C, D, E, F

// Check if queue is full
try {
    $queue->enqueue("G");
} catch (OverflowException $e) {
    echo $e->getMessage() . "\n"; // Output: Queue is full
}

// Check if queue is empty
echo $queue->isEmpty() ? "Queue is empty\n" : "Queue is not empty\n"; // Output: Queue is not empty

// Get the current size of the queue
echo "Current size of the queue: " . $queue->size() . "\n"; // Output: 5
```

### Explanation

1. **Queue Class**: This class manages the queue operations. It includes methods to:

   - `enqueue($item)`: Add an item to the end of the queue.
   - `dequeue()`: Remove and return the item from the front of the queue.
   - `peek()`: Return the item at the front without removing it.
   - `isEmpty()`: Check if the queue is empty.
   - `size()`: Get the current size of the queue.
   - `display()`: Display the contents of the queue.

2. **Example Usage**: Demonstrates how to create a queue, add items, remove items, peek at the front item, check if the queue is empty, and display the queue's contents.

### Handling Exceptions

The queue implementation includes handling for two types of exceptions:

- **OverflowException**: Thrown when trying to enqueue an item into a full queue.
- **UnderflowException**: Thrown when trying to dequeue an item from an empty queue.

By following this guide, you can implement and use a queue data structure in PHP effectively.
