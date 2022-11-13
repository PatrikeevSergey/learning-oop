<?

require_once './include/practic/classes/Product.php';

$product1 = new Product ('Яблоко', 45);

print $product1->name . ' стоит ' . $product1->price . '<hr>';

$product2 = $product1;

print $product2->name . ' стоит ' . $product2->price . '<hr>';