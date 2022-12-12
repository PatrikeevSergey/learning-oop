<?
class Arr2 {
	private $numbers = [];

	public function add($numbers){
		$this->numbers[] = $numbers;
		return $this;
	}

	public function push($numbers){
		$this->numbers = array_merge($this->numbers, $numbers);
		return $this;
	}

	public function getSum(){
		return array_sum($this->numbers);
	}
}