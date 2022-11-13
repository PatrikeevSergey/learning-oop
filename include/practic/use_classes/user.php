<?

require_once './include/practic/classes/User.php';

$user = new User('Ivan', 'Ivanov', '1993-11-12');

print 'Фамилия - ' . $user->getSurname() . '. <br> Имя - ' . $user->getName() . '. <br> Дата рождения - ' . $user->getBirthday() . '. <br> Полных лет - ' . $user->calculateAge() . '. <hr>';


$employee1 = new Employee('Sergey', 'Partikeev', '1993-10-19', 1000);

print 'Фамилия - ' . $employee1->getSurname() . '.<br> Имя - ' . $employee1->getName() . '.<br> Дата рождения - ' .$employee1->getBirthday(). '. <br> Зарплата - ' . $employee1->getSalary() . '.<hr>';