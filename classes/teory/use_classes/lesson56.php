<?php require_once './classes/teory/classes/lesson56.php'; ?>

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
		<?php 
			$date = new Date();
			print $date . "<br>";
			//print (new Date('2025-12-25'))->addYear(3)->subDay(5);

			
			print (new Date("2025-12-25"))->addYear(3)->addYear(1);
		?>
	</p>
</div>
</body>
</html>