<div><p>Реализация класса поиска сумму и извлечения из нее квадратного, кубического корней и корня четвертой степени</p></div>

<?
	require_once './classes/ArrayAvgHelper.php';

	$arr = [];

	for ($i = 0; $i < 20; $i ++){
		$arr[$i] = mt_rand(1, 1000);

		print $arr[$i] . " " ;

	}

	print '<br>';

	$arrayAvgHelper = new ArrayAvgHelper;

	print $arrayAvgHelper->getAvg1($arr) . "<br>";
	print $arrayAvgHelper->getAvg2($arr) . "<br>";
	print $arrayAvgHelper->getAvg3($arr) . "<br>";
	print $arrayAvgHelper->getAvg4($arr) . "<br>";