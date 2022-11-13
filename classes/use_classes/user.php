<?
require_once './classes/User.php';

/*$sergey = new User ('Sergey', 29);

		print "Вызов функций до изменения. <br> Имя: " . $sergey->getName() . '.<br> Возраст: ' . $sergey->getAge(). '. <br> Вызов функции после изменения. <br>';

		$sergey->setAge(30);

		print "Имя: " . $sergey->getName() . ".<br> Возраст: " . $sergey->getAge(). ". <br> ";*/

print "<hr>";


//Хранение объектов в массивах в ООП на php

$users = [
	new User('John', 21),
	new User('Eric', 22),
	new User('Kyle', 23)
];

foreach ($users as $user) {
	print $user->name . ' ' . $user->age . '<br>';
}