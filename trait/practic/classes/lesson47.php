<?php 

trait Trait1 {
	private function method() {
		return 1;
	}
}

trait Trait2 {
	private function method() {
		return 2;
	}
}

trait Trait3 {
	private function method() {
		return 3;
	}
}

class Test {
	use Trait1, Trait2, Trait3 {
		Trait1::method insteadof Trait2;
		Trait1::method as method1;
		Trait2::method as method2;

		Trait1::method insteadof Trait3;
		Trait3::method as method3;
	}


	public function __construct (){
		print "Метод 1 - " . $this->method1() . "<br>";
		print "Метод 2 - " . $this->method2() . "<br>";
		print "Метод 3 - " . $this->method3() . "<br>";
		print "Сумма результатов возврата чисел методов равен " . $this->method1() + $this->method2() + $this->method3();
	}
}