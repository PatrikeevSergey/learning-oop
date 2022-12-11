<?php
class User {
	private $name, $age;

	public function __construct($name, $age){
		$this->name =$name;
		$this->age = $age;
	}

	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}
}

class User1 {
	private $name, $age;

	public function __construct($name, $age){
		$this->name =$name;
		$this->age = $age;
	}

	public function __toString(){
		return $this->name;
	}

	public function getName(){
		return $this->name;
	} 

	public function getAge(){
		return $this->age;
	}
}