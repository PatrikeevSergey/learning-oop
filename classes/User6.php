<?
class User6 {
	private $name;
	protected $age;

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		if($age >= 18){
			$this->age = $age;
		}
	}
}


class Student extends User6 {
	private $course;

	public function getCourse(){
		return $this->course;
	}

	public function setCourse($course){
		$this->course = $course;
	}

	public function setAge($age){
		if($age >= 18 and $age <= 25){
			$this->age = $age;
		}
	}
}