<?php

require_once './node.php';
require_once './HashTable.php';


$hastable = new HashTable(5);

$hastable->insert("name", "Alice");
$hastable->insert("age", 25);
$hastable->insert("city", "New York");


$hastable->display();
