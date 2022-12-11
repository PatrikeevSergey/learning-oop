<?php 
trait TestTrait {
	public function method1(){
		return 1;
	}

	abstract public function method2();
}



class Test {
	use testTrait;

	public function method2(){
		return 2;
	}

	public function __construct () {
		print $this->method2();
	}
}