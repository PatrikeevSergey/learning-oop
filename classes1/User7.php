<?
class User7 {

	private $name;
	protected $age;

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		if ($this->isNameCurrent($name)){
			$this->name = $name;
		} else {
			print  "Количество символов в имени должно быть больше 5";
		}
	}

	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		if($age >= 18){
			$this->age = $age;
		}
	}

	protected function isNameCurrent($name){
		return iconv_strlen($name) > 5;
	}

}



class Student extends User7 {
	private $course;

	public function setAge($age){
		if ($age <= 25){
			parent::setAge($age);
		}
	}

	public function getCourse(){
		return $this->course;
	}

	public function setCourse($course){
		$this->course = $course;
	}

	public function setName($name){
		if($this->isNameCurrentStud($name)){
			$this->name = $name;
		} else {
			print "Количество символов в имени должно быть больше 5 и меньше 10";
		}
	}

	private function isNameCurrentStud($name){
		if (iconv_strlen($name) < 10){
			parent::isNameCurrent($name);
		}
	}
}	