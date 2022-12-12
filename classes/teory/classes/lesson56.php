<?php
class Date {
	public function __construct ($date = null){
		//если дата не передана - пусть бурется текущая
	}

	public function getDay(){
		return date("d");
	}

}