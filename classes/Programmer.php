<?
require_once './classes/User4.php';

class Programmer extends Employee {
	private $langs = [];	

	public function getLangs(){
		
		$langTest[] = $this->langs;
		foreach ($langTest as $value){
			return $value;
		}
		
	}

	public function setLangs($langs){
		$this->langs = $langs;
	}
}

