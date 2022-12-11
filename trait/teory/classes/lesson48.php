<?php
trait testTrait {
	private function method(){
		return "!!!";
	}
}
class Test {
	use testTrait;
	public function __construct(){
		print $this->method();
	}
}

trait testTrait1 {
	private function method(){
		return 1;
	}
}

class Test1 {
	use testTrait1 {
		testTrait1::method as public;
	}
}