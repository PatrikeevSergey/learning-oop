<?php

class User {
	private $name, $surname, $partonymic;

	public function __construct($name, $surname, $partonymic){
		$this->name = $name;
		$this->surname =$surname;
		$this->partonymic = $partonymic;
	}

	public function __toString(){
		return $this->name;
	}
	/*public function __toString(){
		return $this->surname;
	}*/
}