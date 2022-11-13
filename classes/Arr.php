<?
/*class Arr {
	private $numbers = [];
	private $array = [];

	public function add($num){
		return $this->numbers[] = $num;
	}

	public function getSum(){
		return array_sum($this->numbers);
	}
}*/


class Arr {
	private $numbers = [];

	public function add($num){
		for ($i = 1; $i <= $num; $i++){ 
			print  $this->numbers[$i] = mt_rand(1, 5) . ' ' ;
		}
	}

	public function getAvg(){
		return array_sum($this->numbers) / count($this->numbers);
	}
}