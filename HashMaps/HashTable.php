<?php



class HashTable
{
    private $buckets;
    private $size;

    public function __construct($size = 10)
    {
        $this->size = $size;
        $this->buckets = array_fill(0, $this->size, null);
    }


    private function hash($key)
    {
        return crc32($key) % $this->size;
    }

    public function insert($key, $value)
    {
        $index = $this->hash($key);
        $newNode = new Node($key, $value);

        if ($this->buckets[$index] === null) {
            $this->buckets[$index] = $newNode;
        } else {
            $current = $this->buckets[$index];
            while ($current->next !== null) {
                if ($current->key === $key) {
                    $current->value = $value;
                    return;
                }
                $current = $current->next;
            }

            if ($current->key === $key) {
                $current->value = $value;
            } else {
                $current->next = $newNode;
            }
        }
    }

    public function get($key)
    {
        $index = $this->hash($key);
        $current = $this->buckets[$index];

        while ($current !== null) {
            if ($current->key = $key) {
                return $current->value;
            }
            $current = $current->next;
        }
        return null;
    }

    public function remove($key)
    {
        $index = $this->hash($key);
        $current = $this->buckets[$index];
        $previous = null;

        while ($current !== null) {
            if ($current->key === $key) {
                if ($previous === null) {
                    $this->buckets[$index] = $current->next;
                } else {
                    $previous->next = $current->next;
                }
                return true;
            }
            $previous = $current;
            $current = $current->next;
        }

        return false; //key not found

    }

    //didsplay the hash table
    public function display()
    {
        for ($i = 0; $i < $this->size; $i++) {
            echo "Bucket $i ";
            $current = $this->buckets[$i];
            while ($current !== null) {
                echo "({$current->key} => {$current->value})";
                $current = $current->next;
            }
            echo "<br>";
        }
    }
}
