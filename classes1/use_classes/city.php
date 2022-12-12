<?
require_once './classes/City.php';

$cities = [
	new City ('Ростов-на-Дону', 1200000),
	new City ('Москва ', 17400000),
	new City ('Санкт - Петербург', 17000000),
	new City ('Новосибирск', 11000000),
	new City ('Екатеринбург', 10000000)
];


foreach ($cities as $city){
	print 'Город: ' . $city->name . '. Население -  ' . $city->population . '.<br>';
}