<?

class user {
	public $name;
	public $age;
//метод для проверки возраста  и изменение значения переменно
	public function setAge($age){
		if ($age >= 18 and $age <= 60){
			$this->age = $age;
		}
	}
}

$user = new user();

$user->setAge(30);

print $user->age;

print '<hr>';

class user1{
	public $name;
	public $age;
//метод проверки возраста вынесен отдельно.
	private function isAgeCurrent($age){
		return $age >= 18 && $age <= 60;
	}

//метод изменения возраста 
	public function setAge($age){
		//проверка возраста на корректность
		if($this->isAgeCurrent($age)){
			$this->age = $age;
		}
	}
}

unset($user);

$user = new user1();

$user->setAge(59);

print $user->age;

print '<hr>';


class user2{
	public $name;
	public $age;
//метод проверки возраста
	public function setAge($age){
		if($this->isAgeCurrent($age)){
			$this->age = $age;
		}
	}
//метод прибавления к возрасту
	public function addAge($years){
		$newAge = $this->age + $years;
//проверка возраста на корректность 
		if ($this->isAgeCurrent($newAge)){
			$this->age = $newAge; //обновлние, если возраст прошел проверку
		}
	}

	private function isAgeCurrent($age){
		return $age >= 18 && $age <= 60;
	}
}


unset($user);

$user = new user2();

$user->setAge(18);

$user->addAge(2);

print $user->age;

print "<hr>";

//класс с методом уменьшения возраста

class user3{
	public $name;
	public $age;

	public function setAge($age){
		if ($this->isAgeCurrent($age)){
			$this->age = $age;
		}
	}

	public function subAge($years){
		$newAge = $this->age - $years;

		if($this->isAgeCurrent($newAge)){
			$this->age = $newAge;
		}
	}

	private function isAgeCurrent($age){
		return $age >= 18 and $age <= 60;
	}
}

$user = new user3();

$user->setAge(20);

$user->subAge(2);

print $user->age;
print '<hr>';

print "<p>Класс студенты</p>";

class Student {
	public $name;
	public $course = 1 ;

	public function tracnfertToNextCourse($course){
		if($this->isCourseCorrent($course)){
			$this->course = $course;
		} 
	}

	public function getCourse($years){
		$newCourse = $this->course + $years;

		if ($this->isCourseCorrent($newCourse)){
			$this->course = $newCourse;
		}
	}


	public function isCourseCorrent($course){
		return $course >= 1 and $course <= 5;
	}
}


$student = new Student();

$student->tracnfertToNextCourse(3);
$student->getCourse(3);

print $student->course;
print '<hr>';