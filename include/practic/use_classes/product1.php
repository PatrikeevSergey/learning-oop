<?php

require_once './include/practic/classes/Product1.php';

$test = new Product1('Яблоки', 45, 5);

print $test->getName() . '<br>';
print $test->getCost() . '<br>';





$product = new Cart;

$product->add(new Product1('Яблоки', 45, 5));
$product->add(new Product1('Груши', 45, 5));
$product->add(new Product1('Апельсины', 45, 5));

