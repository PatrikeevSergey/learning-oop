<?php require_once './trait/teory/classes/lesson51.php'; ?>
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
		Использование трейтов в трейтах
	</h1>
</div>
<div>
	<p>
		Трейты, подобно классам, также могут использовать и другие трейты. <br>
		Рассмотрим на примере. Пусть есть такой трейт с двумя методами:
	</p>
</div>
<div>
	<p>
		Пусть так же есть еще один трейт:
		<br> К нему подключим Trait1
	</p>
</div>
<div>
	<p>
		После такого подключания получаетс, что Trait2 кроме своих методов будет еще иметь и методы трейта Trait1. Проверим это: сделаем класс Test, подключим к нему трейт Trait2 и убедимс, что в классе проявляются методы первого и второго трейтов:
	</p>
	<p>
		<?php 
			new Test;
		?>
	</p>
</div>
</body>
</html>