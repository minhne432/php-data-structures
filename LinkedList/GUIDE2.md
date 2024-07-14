A linked list is a data structure used for storing a collection of elements, where each element (called a node) contains a value and a reference (or link) to the next node in the sequence. Unlike arrays, linked lists do not store elements in contiguous memory locations. Instead, each element points to the next, creating a chain-like structure.

### Types of Linked Lists

1. **Singly Linked List**: Each node contains a value and a reference to the next node.
2. **Doubly Linked List**: Each node contains a value, a reference to the next node, and a reference to the previous node.
3. **Circular Linked List**: The last node points back to the first node, forming a circle.

### Structure of a Node

In a singly linked list, each node typically has the following structure:

```php
class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}
```

### Singly Linked List Example

Here’s an example of a singly linked list in PHP:

```php
class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    // Function to add a node at the end of the list
    public function append($data) {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = & $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    // Function to display the list
    public function display() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
}

// Creating a linked list and adding nodes
$list = new LinkedList();
$list->append(10);
$list->append(20);
$list->append(30);

// Displaying the linked list
$list->display();  // Output: 10 20 30
```

### When to Use Linked Lists

Linked lists are used in various scenarios where dynamic memory allocation and efficient insertions and deletions are important:

1. **Dynamic Size**: When the size of the data structure needs to change dynamically. Unlike arrays, linked lists can grow and shrink as needed without reallocating or copying the entire data structure.

2. **Efficient Insertions/Deletions**: When frequent insertions and deletions of elements are required. In a linked list, these operations can be done in O(1) time if the node to be inserted/deleted is known, whereas in an array, these operations can take O(n) time due to shifting elements.

3. **Memory Management**: When memory allocation needs to be managed efficiently. Linked lists allocate memory for each element individually, which can be more efficient than pre-allocating a large block of memory for an array.

4. **Flexibility**: When the order of elements can change frequently, and you need a flexible structure that allows for easy rearrangement of elements.

### Examples of Use Cases

- **Implementing Data Structures**: Stacks, queues, and other complex data structures can be implemented using linked lists.
- **Graph Representation**: Adjacency lists in graph representation use linked lists to store neighbors of a vertex.
- **Sparse Matrices**: Linked lists can be used to represent sparse matrices efficiently by only storing non-zero elements.

In summary, linked lists are a versatile and efficient data structure for many scenarios where dynamic memory management and frequent insertions and deletions are required.
