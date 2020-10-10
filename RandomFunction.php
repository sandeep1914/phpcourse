<!DOCTYPE html>
<html>
<head>
	<title>RandomFunction</title>
</head>
<body>
	<h1>
		<?php
		//echo mt_rand(0,10);
		/*$names = array("Sandeep", "Sanjeev", "Pradeep");
		$rando=mt_rand(0,2);
		echo $names[$rando];*/
		echo "Guess a number! <br/>";
		$num=4;
		$rando=mt_rand(0,10);
		if($num == $rando)
		{
			echo "You Win The Game! $num=$rando";
		}
		else
		{
			echo "You Loss the Game! $num does'nt equal to $rando";
		}
		?>
	</h1>
</body>
</html>