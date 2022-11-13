<?php
class SumHelper {

	public function getSum2 ($arr){
		return $this->getSum($arr, 2);
	}

	public function getSum3($arr){
		return $this->getSum($arr, 3);
	}

	public function getMeanSuare($arr){
		$length = count($arr);


		return pow(($this->getSum($arr, 2) / $length),1/2); 
	}

	private function getSum($arr, $power){
		$sum = 0;

		foreach ($arr as $value){
			$sum += pow($value, $power);
		}
		return $sum;
	}
}