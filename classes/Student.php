<?

class Student {
	private $name;
	private $course;

	public function __construct($name){
		$this->name = $name;
		$this->course = 1;
	}


	//Геттер имени
	public function getName(){
		return $this->name;
	}

	//Геттер курса 
	public function getCourse(){
		if ($this->isCourseCurrent($this->course)){
			return $this->course;
		} else {
			return  "Курс не может быть больше 5";
		}
	}

	//перевод студента на новый курс 

	public function transfertToNextCourse(){
		if($this->isCourseCurrent($this->course)){
			$this->course++;
		}
	}

	private function isCourseCurrent($course){
		return $course >= 1 and $course <= 5;
	}
}