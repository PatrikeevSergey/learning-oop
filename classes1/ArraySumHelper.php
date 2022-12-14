<?
class ArraySumHelper {
	//сумма элеметов массива
	public function getSum1($arr){
		return $this->getSum($arr, 1);
	}

	//Сумма квадратов элементов массива
	public function getSum2($arr){
		return $this->getSum($arr, 2);
	}

	//Сумма кубов элементов массива
	public function getSum3($arr){
		return $this->getSum($arr, 3);
	}

	//Сумма четвертых степеней элементов массива
	public function getSum4($arr){
		return $this->getSum($arr, 4);
	}

	private function getSum($arr, $power){
		$sum = 0;

		foreach ($arr as $value){
			$sum += pow($value, $power);
		}
		return $sum;
	}
}