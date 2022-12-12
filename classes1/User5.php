<?

class User5 {
	private $name;
	protected $age;

	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setAge($age){
		$this->age = $age;
	}
}


class Student extends User5 {
	private $course;

	public function setCourse($course){
		$this->course = $course;
	}

	public function getCourse(){
		return $this->course;
	}

	public function addOneYear(){
		return $this->age++;
	}
}