<div><p>Класс, как набор методов в ООП на PHP</p></div>
<div>Часто классы используются как набор некоторых методов, сгруппированных вместе. В этом случае не нужно создавать много объектор этого класса, а досаточно одного. 
<p>Для примера создается класс ArraySumHelper, который предоставит набор методов для работы с массивами. Каждый метод будет принимать массив, что-то с ним делать и возвращать результат.</p>
</div>

<?
	require_once './classes/ArraySumHelper.php';

	$arr = [1, 2, 3];
	$arraySumHelper = new ArraySumHelper;

	print $arraySumHelper->getSum1($arr) . "<br>";
	print $arraySumHelper->getSum2($arr) . "<br>";
	print $arraySumHelper->getSum3($arr) . "<br>";
	print $arraySumHelper->getSum4($arr) . "<br>";