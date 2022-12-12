<?php require_once './classes/teory/classes/lesson56.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div>
	<h1>
		Класс Date в ООП на php
	</h1>
</div>
<div>
	<p>
		Начиная с данного урока будем принименять изученную теорию по ООП на практических примерах, создавая раздичные класс.<br>
		Давайте создадим класс с датой. Пусть этот класс параметром конструктора принимает дату в формате <i>год-месяц-день</i> и имеет следующие методы:
	</p>
</div>
<div>
	<p>
		<?php 
			$date = new Date();
			print $date->getDay();
		?>
	</p>
</div>
</body>
</html>