<?php 
trait testTrait {
	//Метод с именем method()
	public function method(){
		return 'trait';
	}
}

class testClass {
	use testTrait;

	//Такой же метод с именем method()

	public function method(){
		return 'class';
	}
}

trait testTrait1 {
	public function method(){
		return 'trait';
	}
}

class ParentClass {
	public function method(){
		return 'parent';
	}
}

class testClass1 extends ParentClass {
	use testTrait1;
}