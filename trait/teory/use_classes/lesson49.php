<?php require_once './trait/teory/classes/lesson49.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div>
	<h1>Приоритет методов</h1>
</div>
<div>
	Если в классе и в трейте есть одноименный метод, то метод класса переопределит метод трейта:
	<p>
		<?php 
			$test = new testClass;
			print $test->method();
		?>
	</p>
</div>
<div>
	<p>
		Если же сам класс не имеет такого метода, но имеется конфликт имен методов трейта и методов родительского класса, то методы трейта имеют преоритет:
	</p>
	<p>
		<?php 
			$test1 = new testClass1;
			print $test1->method();
		?>
	</p>
</div>
</body>
</html>
