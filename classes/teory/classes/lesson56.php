<?php
class Date {
	private $date, $days = [], $months = [];

	public function __construct($date = null){
		//если дата не передана - берется текущая
		if($date != null){
			$this->date = $date;
		}else {
			$this->date = date("Y-m-d");
		}
	}

	public function getDay(){
		//Возвращает день
		return date("j", strtotime($this->date));
	}

	public function getMonth($lang = null){
		//возвращает месяц 

		//переменная $lang может принимать значение ru и en 
		//если эта переменная пуста - пусть месяц будет словом на заданном языке

		switch ($lang){
			case 'ru':
				$this->months = array(1 => 'Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
				return $this->months[(date("n", strtotime($this->date)))];
			break;
			case 'en':
				return date("F", strtotime($this->date));
			break;

			default:
				return date("F", strtotime($this->date));
			break;
		}
	}

	public function getYear(){
		//Возвращает год

		return date("Y", strtotime($this->date));
	}

	public function getWeekDay($lang = null){
		//Возвращает день недели

		//Переменная $lang может принимаь значение ru и en
		//если эта переменная пуста - пусть день будет вывозиться на заданном языке.

		switch ($lang){
			case 'ru':
				$this->days = array (1 => 'Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье');
				return $this->days[(date("w", strtotime($this->date)))];
			break;

			case 'en':
				return date('l', strtotime($this->date));
			break;

			default:
				return date('l', strtotime($this->date));
			break;

		}
	}

	public function addDay($value){
		//Добавляет значение $value к дню
		return date("Y-m-d", strtotime("$this->date + $value day"));
	}
	public function subDay($value){
		//отнимает значение $value от дня
		return date("Y-m-d", strtotime("$this->date - $value day"));
	}

	public function addMonth($value){
		//Добавляет значение $value к месяцу
		return date("Y-m-d", strtotime("$this->date + $value month"));
	}

	public function subMonth($value) {
		//Отнимает значение $value от месяца
		return date("Y-m-d", strtotime("$this->date - $value month"));
	}

	public function addYear($value){
		//добавляет значение $value к году
		return date("Y-m-d", strtotime("$this->date + $value year"));
	}

	public function subYear($value){
		return date("Y-m-d", strtotime("$this->date - $value year"));
	}

	public function format($format){
		//Выдает дату в указанном формате.
		//Формат пусть будет такой, как в функции date
	}

	public function __toString(){
		//Выдает дату в формате год-месяц-день
		if ($this->date != date("Y-m-d")){
			return "Введена дата - " . (string) $this->date . "<br>";
		}else {
			return "Текущая дата - " . (string) $this->date . "<br>";
		}
	}

}