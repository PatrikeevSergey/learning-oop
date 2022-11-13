<?
class Arr1 {
	private $numbers = []; //массив чисел

	public function __construct($numbers){
		$this->numbers = $numbers; //запись массива $numbers в свойства
	}
	//добавление еще одного числа в массив
	public function add($numbers){
		$this->numbers[] = $numbers;
	}
	//сумма чилес
	public function getSum(){
			return array_sum($this->numbers);
		}

}