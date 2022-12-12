<?
class User4 {
	private $name;
	private $age;

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

class Employee extends User4 {
	private $salary;

	public function getSalary(){
		return $this->salary;
	}

	public function setSalary($salary){
		$this->salary = $salary;
	}
}


class Student extends User4 {
	private $course;

	public function getCourse(){
		return $this->course;
	}

	public function setCourse($course){
		if($this->isCourseCurrent($course)){
			$this->course = $course;
		}
	}

	private function isCourseCurrent($course){
		return $course >= 1 and $course <= 5;
	}
}