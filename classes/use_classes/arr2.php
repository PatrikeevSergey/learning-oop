<div><p>Цепочки методов</p></div>

<?
	require_once './classes/Arr2.php';

$arr = new Arr2;

$arr->add(1);
$arr->add(2);
$arr->push([3,4]);
print $arr->getSum();

print '<hr> Более сокращенная запись<br>';

unset($arr);
$arr = new Arr2;

print $arr->add(1)->add(2)->push([3, 4])->getSum() . '<hr>';

unset($arr);

print 'Или так - ' . (new Arr2)->add(1)->add(2)->push([3, 4])->getSum() . '<hr>';