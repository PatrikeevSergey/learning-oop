<?php
require_once './include/practic/classes/Arr.php';

$arr = new Arr();

for ($i = 0; $i <= 10; $i++){
  $arr->add(mt_rand(1, 1000));
}

print '<hr>';



print $arr->getSum23() . '<hr>';

print 'Среднее квадратичное массива (Квадратный корень, извлеченный из суммы квадратов элементов, деленное на количество) ' . $arr->resultTest() . '<hr>';

print 'метод поиска суммы среднего арифметического и среднего квадратичного из массива = ' . $arr->getAvgMeanSum() . '<hr>';