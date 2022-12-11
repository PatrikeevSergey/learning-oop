<?php require_once './magic/teory/classes/lesson53.php'; ?>
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
		Магический метод toString в ООП на php
	</h1>
</div>
<div>
	<p>
		Методы PHP, начинающиеся с двойного подчеркивания __, называются <i>магическими</i>. Магия таких методов состоит в том, что они могут вызываться при совершении какого-то действия автоматически. 
	</p>
	<p>
		Первый магический метод, который изучим, называется __toString. Он вызывается при попытке приведения экземпляра класса к строке. Разберемся на примере.
	</p>
</div>
<div>
	<?php 
		$user = new User('sergey', 29);
		//echo $user;

		//print "Имя - " .  $user->getName() . "<br>Возраст - " . $user->getAge() .".<br>"; 
	?>
</div>
<div>
	<p>
		Попытка сделать вывод оъекта через echo и преобразование к строке. В данном случае PHP выдаст ошибку, т.к. объекты в строку не преобразуются. <br>
		Для того, чтобы убрать ошибку, необходимов явном виде сказать PHP, что делать при попытке преобразовать объект в строку. Для этого существует магический метод __toString. Если к коде класса сделать такой метод, то результат этого метода (то есть то, что вернется через return) и будет строковым представлением объекта. <br>
		Пусть при попытке вывести объект через echo выводилось имя юзера, то метод __toString вернем в нем значение свойства name.
	</p>
</div>
<div>
	<?php
		unset($user);
		$user = new User1('Sergey', 29);

		echo $user . "<br>";
	?>
</div>
</body>
</html>