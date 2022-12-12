<?
require_once './classes/SumHelper.php';

class Arr3 {
	private $nums = [];
	private $sumHelper;

	public function __construct(){
		$this->sumHelper = new SumHelper;
	}

	public function getSum23(){
		$nums = $this->nums;

		return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
	}

	public function add($num){
		$this->nums[] = $num;
	}
}