<?php

	# calculator.php : enter default number and calculate

	$n1 = 300;
	$n2 = 140;
	$n = 0;

	$choice = 3;

	switch ($choice)
	{
		case 1 : $n = $n1 + $n2; break;
		case 2 : $n = $n1 - $n2; break;
		case 3 : $n = $n1 * $n2; break;
		case 4 : $n = $n1 / $n2; break;
		case 5 : $n = $n1 % $n2; break;
		default : $n = "enter choice between [1 to 5]";
	}
	echo (" output : ".$n);

?>
