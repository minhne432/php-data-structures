<?php


require './LinkedList.php';

$linkedList = new LinkedList();

$linkedList->append(1);
$linkedList->append(2);
$linkedList->append(3);
$linkedList->append(3);


echo $linkedList->length();

// var_dump($linkedList);