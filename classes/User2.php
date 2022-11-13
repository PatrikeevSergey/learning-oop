<?
class User2 {
	public $name;//имя
	public $surname; //фамилия
	public $patronymic; //отчество

	public function __construct ($surname, $name, $patronymic){
		$this->surname = $surname;
		$this->name = $name;
		$this->patronymic = $patronymic;
	}
}