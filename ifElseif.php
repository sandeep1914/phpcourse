<!DOCTYPE html>
<html>
<head>
	<title>Elseif</title>
</head>
<body>
	<h1>
		<?php
		// If Elseif Statements
		$num_1 = 4;
		$num_2 = 5;
		if($num_1 > $num_2)
		{
			echo $num_1." is Greater than ".$num_2;
		}
		elseif ($num_1 == 4)
		{
			echo $num_1 . "is equal to 4";
		}
		else
		{
			echo $num_1." is Lesser than ".$num_2;
		}
		?>
	</h1>
</body>
</html>