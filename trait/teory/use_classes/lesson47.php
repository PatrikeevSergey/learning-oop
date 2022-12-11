<?php require_once './trait/teory/classes/lesson47.php'; ?>

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
		Разрешение конфликтов в трейтах
	</h1>
</div>
<div>
	<p>
		Т.к. один класс может использовать несколько трейтов, то программиста может поджидать проблема, возникшая, когда два трейта имею одинаковые методы
	</p>
	<p>
		В этом случае PHP выдаст фатальную ошибку. Чтобы поправить ситуацию, нужно будет разрешить конфликт имен явным образом. Например:
	</p>
	<p>
		Пусть есть класс Test, использующий два трейта с одним и тем же методом. Если просто подключить два трейта, то php выдаст ошибку, т.к. у трейтов есть совпадающие методы.
	</p>
	<p>
		Разрешить (в данном контектсте значит разрулить) конфликт имен трейтов. Для этого существует специальный оператор insteadof (переводится как "вместо чего-то"). С помощью этого оператора будет использоватьс method трейта Trait1 вместо того де трейта Trait2. 
	</p>
	<p>
		<?php 

			new Test;
		?>
	</p>
	<p>
		Синтаксис следующий, в начале имя трейта, потом два двоеточия, потмо им метода, потом оператор insteadof и имя второго трейта. <br>
		Итак, в классе используетс метод method, то следует брать его из первого трейта. Можно наоборот, взять метод второго трейта:<br>
		<?php new Test1; ?>
	</p>
	<p>
		При желании можно переименовать метод и первого трейта:<br>
		<?php
			new Test2; 
		?>
	</p>
</div>
</body>
</html>