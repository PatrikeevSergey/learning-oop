<?php require_once './trait/practic/classes/lesson52.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div>
	<p>
		№1. Пусть у вас есть трейт Trait1 и нет трейта Trait2. Проверьте, что выведет функция trait_exists для трейта Trait1 и для трейта Trait2. 
	</p>
</div>
<div>
<?php
if (trait_exists('Trait1')){
	print "+";
}else {
	print "-";
}
print '<br>';

if (trait_exists('Trait2')){
	print "+";
}else {
	print "-";
}
?>
</div>
<div>
	<p>
		№2. Выведите на экран список всех объявленных трейтов. Функция - get_declared_traits
	</p>

	<?php 
		$traits = get_declared_traits();
		foreach ($traits as $key=>$value){
			print "$key -> $value <br>";
		}
	?>
</div>
</body>
</html>