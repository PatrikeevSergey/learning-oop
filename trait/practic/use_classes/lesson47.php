<?php require_once './trait/practic/classes/lesson47.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div>
	<h1>Задания</h1>
	<p>
		№1. Сделать 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом трейте будет метод method, возвращающий 1, во втором трейте - одноименный метод, возвращающий 2, а в третьем трейте - одноименный метод, возвращающий 3.
	</p>
	<p>
		№2. Сделать класс Test, использующий все три созданных нами трейта. Сделайте в этом классе метод getSum, возвращающий сумму результатов методов подключенных трейтов. 
	</p>
</div>
<div>
	<h1>
		Выполнение работы 
	</h1>
	<p>
		<?php
			new Test;
		?>
	</p>
</div>
</body>
</html>