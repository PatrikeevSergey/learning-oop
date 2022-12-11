<?php
	trait Trait1 {
		private function method(){
			return 1;
		}
	}

	trait Trait2 {
		private function method(){
			return 2;
		}
	}

	class Test {
		use Trait1, Trait2{
			Trait1::method insteadof Trait2;
			Trait2::method as method2;
		}
		public function __construct(){
			print $this->method() . " " . $this->method2() . "<br>";
			print "Сумма - " . $this->method() + $this->method2() . "<br>";

		}
	}

	class Test1 {
		use Trait1, Trait2{
			Trait2::method insteadof Trait1;
		}

		public function __construct(){
			print $this->method();
		}
	}

	class Test2 {
		use Trait1, Trait2 {
			Trait1::method insteadof Trait2;
			Trait1::method as method1;
			Trait2::method as method2;
		}

		public function __construct(){
			print "Значение первого трейта - " . $this->method1() . "<br> Значение второго трейта - " . $this->method2() ."<br>";
		}
	}
?>