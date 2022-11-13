<?
class ArrayAvgHelper {
	public function getAvg1($arr){
		return $this->getSum($arr, 1);
	}

	public function getAvg2($arr){
		return pow($this->getSum($arr, 2), 1/2);
	}

	public function getAvg3($arr){
		return pow($this->getSum($arr, 3), 1/3);
	}

	public function getAvg4($arr){
		return pow($this->getSum($arr, 4), 1/4);
	}

	private function getSum($arr, $power){
		$sum = 0;
		
		foreach ($arr as $value){
			$sum += pow($value, $power);
		}

		return $sum;

	}

	private function calcSqrt($num, $power){

	}
}