<?
//Свойства только для чтения в ООП на PHP

//сейчас создадим объект, который будет доступен для чтения, но не для записи. Для этого нужно сделать геттер, но не делать сеттер. тогда свойство можно будет прочесть, т.к. есть геттер, но нельзя будет записать, т.к. сеттер отсутсвует 

class User {
	private $name;
	private $age;

	//создади конструктор объекта, в который будем задавать начальные значения свойств:

	public function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

//геттер для чтения имени
	public function getName(){
		return $this->name;
	}
//геттер для чтения возраста
	public function getAge(){
		return $this->age;
	}

	//сеттер для возраста

	public function setAge($age){
		if ($this->isAgeCurrent($age)){
		$this->age = $age;
		}
	}

	private function isAgeCurrent($age){
		return $age >= 18 and $age <= 70;
	}

}


$user = new User('Sergey', 29);

print "Возраст: " . $user->getAge() .".<br> Имя: " . $user->getName() ." .<hr>";

print "Тестовый вывод имени. Его можно читать, но нельзя менять: <br>" . $user->getName() . ".<br>";
$user->setAge(mt_rand(0, 100));
print "Тестовый вывод возраста. Его можно и менять, и читать: <br>" . $user->getAge() . ".<br>";

print "<hr>";

//Задание с работниками

//имя и возраст можно только читать, зарплату можно еще и изменять  

class Employee {
	private $name;
	private $age;
	private $salary;

	public function __construct($name, $age, $salary){
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}

	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}

	public function getSalary(){
		return $this->salary;
	}

	public function setSalary($salary){
		$this->salary = $salary;
	}
}


$employee1 = new Employee('Sergey', 29, 500);
print "Имя: " . $employee1->getName() . ". <br>Возраст: " . $employee1->getAge() . ". <br> Зарплата: " . $employee1->getSalary(). "<hr>";

$employee1->setSalary(1000);

print "После выполнения метода изменения зарплаты. <br> Имя: " . $employee1->getName() . ". <br>Возраст: " . $employee1->getAge() . ". <br> Зарплата: " . $employee1->getSalary(). "<br>";


