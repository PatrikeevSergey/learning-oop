<?
require_once './classes/Arr.php';

$arr = new Arr;

/*$arr->add(1);
$arr->add(2);
$arr->add(3);
*/

print $arr->add(5);
print '<hr>';
print $arr->getAvg();