<?
class User {
	private $name;
	private $surname;
	private $birthday;
	private $diff;

	public function __construct ($name, $surname, $birthday){
		$this->name = $name;
		$this->surname = $surname;
		$this->birthday = $birthday;
	}

	public function getName(){
		return $this->name;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function getBirthday(){
		return $this->birthday;
	}

	public function calculateAge(){
		$this->diff = date('Ymd') - date('Ymd', strtotime($this->birthday));
		return substr($this->diff, 0, -4);
	}
}


class Employee extends User {
	private $salary;

	public function __construct ($name, $surname, $birthday, $salary){
		parent::__construct($name, $surname, $birthday);
		$this->salary = $salary;
	}

	public function getSalary(){
		return $this->salary;
	}
}