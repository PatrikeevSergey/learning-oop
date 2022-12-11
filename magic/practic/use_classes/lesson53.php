<?php require_once './magic/practic/classes/lesson53.php'; ?>

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
		Задание.
	</h1>
	<p>
		№1. Сделайте класс User, в котором будут следующие свойства - name, surname, patronymic. Сделайте так, чтобы при выводе объекта через echo на экран выводилось ФИО пользователя. 
	</p>
	<?php 
		$sergey = new User("Сергей", "Витальевич", "Патрикеев");

		print $sergey;
	?>
</div>
</body>
</html>