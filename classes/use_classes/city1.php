<?
require_once './classes/City1.php';
$prop = 'name';
$cities = [
	new City ('Ростов-на-Дону', '12-15-15', 1200000),
	new City ('Москва ', '12-15-15', 17400000),
	new City ('Санкт - Петербург', '12-15-15', 17000000),
	new City ('Новосибирск', '12-15-15', 11000000),
	new City ('Екатеринбург','12-15-15', 10000000)
];


foreach ($cities as $city){
	print 'Город: ' . $city->$prop . '. Население -  ' . $city->population . '. дата основания - '. $city->fondaion . '<br>';
}