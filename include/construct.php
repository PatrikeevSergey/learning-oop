<?

//приметив конструктором 

class user {
	public $name;
	public $age;


	public function __construct ($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
}


$user = new user('Sergey', 29);

print $user->name . ' ' . $user->age . '<hr>';

class Employee {
	public $name;
	public $age;
	public $salary;

	public function __construct ($name, $age, $salary){
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}
}


$employeeEric = new Employee ('Eric', 25, 1000);

print "Имя: $employeeEric->name.  <br> Возраст: $employeeEric->age. <br> Зарплата: $employeeEric->salary. <hr>" ;

$employeeKyle = new Employee('Kyle', 30, 2000);

print "Имя: $employeeKyle->name.  <br> Возраст: $employeeKyle->age. <br> Зарплата: $employeeKyle->salary. <hr>" ;

print "Сумма зарплат сотрудников - " . $employeeEric->salary + $employeeKyle->salary . "<hr>";

