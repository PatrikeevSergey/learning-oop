<p><h1>Перезапись методов родителя в классе потомка</h1></p>
<p>Пусть дан класс User6 с приватными свойствами name и age, а также геттерами и сеттерами их свойства. </p>
<p>При этом в сеттере возраста выполяется проверка на то, что он равен или больше 18 лет:</p>



<?
	require_once './classes/User6.php';

$student = new Student;

$student->setAge(24);

print $student->getAge();
$student->setAge(30);

print "<br> " . $student->getAge();