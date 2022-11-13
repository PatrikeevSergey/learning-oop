<?
class User8 {
	private $name;
	private $age;

	public function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}
}

class Student extends User8 {
	private $course;

	public function __construct($name, $age, $course){
		parent::__construct($name, $age);

		$this->course = $course;
	}

	public function getCourse(){
		return $this->course;
	}
}