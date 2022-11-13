<?php

require_once './include/practic/classes/SumHelper.php';

class Arr {
	private $nums = [];
	private $sumHelper;

	public function __construct(){
		$this->sumHelper = new SumHelper;
	}

	public function getSum23(){
		$nums = $this->nums;

		return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
	}

	public function resultTest(){
		$nums = $this->nums;

		return $this->sumHelper->getMeanSuare($nums);
	}

	public function add($num){
		$this->nums[] = $num;
	}

	public function getAvgMeanSum(){
		$nums = $this->nums;
		$sum = 0;
		$sum2 = 0;

		foreach ($nums as $value){
			$sum += $value / count($nums);

			$sum2 += pow(($value / count($nums)), 2);
		}

		return $sum + $sum2;
	}	
}


