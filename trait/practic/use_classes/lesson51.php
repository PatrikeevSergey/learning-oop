<?php require_once './trait/practic/classes/lesson51.php'; ?>
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
		Задание
	</h1>
	<p>
		№1. Сделать трейты, которые использую другие трейты. реализовать класс, с методом getSum, который вернет сумму результатов работы методов трейтов.
	</p><hr>
	<h1>
		Выполнение 
	</h1>
	<p>
		<?php
			$test = new Test;
			print "Результат выполнения метода класса Test - " . $test->getSum() . "<br>";
		?>
	</p>
</div>
</body>
</html>