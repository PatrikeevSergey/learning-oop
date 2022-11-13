<?
require_once './classes/User3.php';

$user = new User3('Sergey', 29);

print $user->getName() . ' ' . $user->getAge() . '<br>';

print "<hr> Пусть в переменной будем хранить имя метода.<br>";

$method = 'getName';

print "Тогда: " . $user->$method() . '<hr>';

print 'Пусть в переменной будет храниться ассоциативный массив с методами<br>';

unset($method);

$methods = ['method1' => 'getName', 'method2' => 'getAge'];

print "Тогда: " . $user->{$methods['method1']}() . ' '.$user->{$methods['method2']}() . '<hr>';