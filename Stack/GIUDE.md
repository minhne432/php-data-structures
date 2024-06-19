Certainly! A stack is a linear data structure that follows the Last In, First Out (LIFO) principle. Below is a guide to implementing a stack in PHP.

### Step-by-Step Guide to Implement a Stack in PHP

#### 1. Define the Stack Class

First, define a `Stack` class with necessary methods like `push`, `pop`, `peek`, and `isEmpty`.

```php
class Stack {
    private $stack;
    private $limit;

    public function __construct($limit = 10) {
        // Initialize the stack
        $this->stack = [];
        // Stack size limit
        $this->limit = $limit;
    }

    // Add an item to the stack
    public function push($item) {
        if (count($this->stack) < $this->limit) {
            array_push($this->stack, $item);
        } else {
            throw new OverflowException("Stack is full");
        }
    }

    // Remove and return the top item from the stack
    public function pop() {
        if ($this->isEmpty()) {
            throw new UnderflowException("Stack is empty");
        } else {
            return array_pop($this->stack);
        }
    }

    // Return the top item without removing it
    public function peek() {
        return end($this->stack);
    }

    // Check if the stack is empty
    public function isEmpty() {
        return empty($this->stack);
    }

    // Get the current size of the stack
    public function size() {
        return count($this->stack);
    }

    // Display the stack
    public function display() {
        echo implode(", ", $this->stack) . "\n";
    }
}
```

#### 2. Example Usage

Here's how you can use the `Stack` class to perform stack operations.

```php
$stack = new Stack(5);

// Push items onto the stack
$stack->push("A");
$stack->push("B");
$stack->push("C");

echo "Stack after pushing A, B, C:\n";
$stack->display(); // Output: A, B, C

// Peek the top item
echo "Top item is: " . $stack->peek() . "\n"; // Output: C

// Pop items from the stack
echo "Popped item: " . $stack->pop() . "\n"; // Output: C

echo "Stack after popping:\n";
$stack->display(); // Output: A, B

// Push more items
$stack->push("D");
$stack->push("E");
$stack->push("F");

echo "Stack after pushing D, E, F:\n";
$stack->display(); // Output: A, B, D, E, F

// Check if stack is full
try {
    $stack->push("G");
} catch (OverflowException $e) {
    echo $e->getMessage() . "\n"; // Output: Stack is full
}

// Check if stack is empty
echo $stack->isEmpty() ? "Stack is empty\n" : "Stack is not empty\n"; // Output: Stack is not empty

// Get the current size of the stack
echo "Current size of the stack: " . $stack->size() . "\n"; // Output: 5
```

### Explanation

1. **Stack Class**: This class manages the stack operations. It includes methods to:

   - `push($item)`: Add an item to the top of the stack.
   - `pop()`: Remove and return the top item from the stack.
   - `peek()`: Return the top item without removing it.
   - `isEmpty()`: Check if the stack is empty.
   - `size()`: Get the current size of the stack.
   - `display()`: Display the contents of the stack.

2. **Example Usage**: Demonstrates how to create a stack, add items, remove items, peek at the top item, check if the stack is empty, and display the stack's contents.

### Handling Exceptions

The stack implementation includes handling for two types of exceptions:

- **OverflowException**: Thrown when trying to push an item onto a full stack.
- **UnderflowException**: Thrown when trying to pop an item from an empty stack.

By following this guide, you can implement and use a stack data structure in PHP effectively.
