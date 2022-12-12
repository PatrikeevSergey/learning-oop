<?
/*class User {
	private $name;
	private $age; 

	public function __construct ($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		if($this->isAgeCurrent($age)){
			$this->age = $age;
		}
	}

	private function isAgeCurrent($age){
		return $age >= 18 and $age <= 70;
	}
}*/

class User {
	public $name;
	public $age;

	public function __construct ($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
}