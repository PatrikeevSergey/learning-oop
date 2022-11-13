<?

//работа с Геттерами и сеттерами

class user {
	public $name;
	private $age; //Объявляем возраст юзера

	//метод чтения возраста юзера
	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		if ($this->isAgeCurrent($age)){
			$this->age = $age;
		}
	}

	private function isAgeCurrent($age){
		return $age >= 18 and $age <= 60;
	}
}

$user = new user;
$user->setAge(35);

print $user->getAge();

print '<hr>';

//класс студентов

class Employee {
	private $name;
	private $age;
	private $salary;

	public function getName (){
		return $this->name;
	}


	public function getAge (){
		return $this->age;
	}


	public function getSalary (){
		return $this->salary . "$";
	}

	public function setAge($age){
		if($this->isAgeCurrent($age)){
			$this->age = $age;
		}
	}

	public function setSalary($salary){
		$this->salary = $salary;
	}


	private function isAgeCurrent($age){
		return $age >= 1 and $age <= 100;
	}
}


$employee1 = new Employee();
$employee1->setAge(mt_rand(1, 120));

print "Возраст: " . $employee1->getAge() . "<br>";


$employee2 = new Employee();
$employee2->setSalary(mt_rand(300, 8000));
print "Зарплата: " . $employee2->getSalary() . "<hr>";

