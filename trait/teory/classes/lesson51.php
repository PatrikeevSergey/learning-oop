<?php 
trait Trait1 {
	private function method1(){
		return 1;
	}
	private function method2(){
		return 2;
	}
}

trait Trait2 {
	use Trait1;

	private function method3(){
		return 3;
	}
}

class Test {
	use Trait2;

	public function __construct(){
		print "Метод 1 первого трейта - " . $this->method1() . "<br>";
		print "Метод 2 первого трейта - " . $this->method2(). "<br>";
		print "Метод 1 второго трейта - " . $this->method3(). "<br>";		
	}
}