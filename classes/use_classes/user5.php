<p><h1>Модификатор доступа protected </h1></p>

<p>Как известно, приватные свойства и методы не наследуются. Если необходимо, чтобы метод или свойство были у потомка, его надо сделать public. Проблема в том, что публичне метоты доступны и вне класса, чего не очень хотелось бы.</p>
<p>Другими словами, если необходимо, чтобы методы или свойства родителя наследовались потомками, но при этом оставались для остальных приватными, существует специальный модификатор <i>protected</i>, который реализует описанное. Пусть дан класс User5 с приватными свойствами name и age</p>



<?
	require_once './classes/User5.php';

$student = new Student;

$student->setName('Sergey');
$student->setAge(29);
$student->setCourse(1);


print 'Имя студента - ' . $student->getName() . '. <br> Возраст - ' . $student->getAge() . '. <br> Курс - ' .$student->getCourse() . '<hr>';

$student->addOneYear();
print 'Имя студента - ' . $student->getName() . '. <br> Возраст - ' . $student->getAge() . '. <br> Курс - ' .$student->getCourse() . '<hr>';

$student->addOneYear();
print 'Имя студента - ' . $student->getName() . '. <br> Возраст - ' . $student->getAge() . '. <br> Курс - ' .$student->getCourse() . '<hr>';

$student->addOneYear();
print 'Имя студента - ' . $student->getName() . '. <br> Возраст - ' . $student->getAge() . '. <br> Курс - ' .$student->getCourse() . '<hr>';

$student->addOneYear();
print 'Имя студента - ' . $student->getName() . '. <br> Возраст - ' . $student->getAge() . '. <br> Курс - ' .$student->getCourse() . '<hr>';

$student->addOneYear();
print 'Имя студента - ' . $student->getName() . '. <br> Возраст - ' . $student->getAge() . '. <br> Курс - ' .$student->getCourse() . '<hr>';