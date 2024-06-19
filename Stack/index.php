<?php

require_once './Stack.php';


$stack = new Stack();

$stack->push(1);
$stack->push(2);
$stack->push(3);


print_r($stack->pop());
