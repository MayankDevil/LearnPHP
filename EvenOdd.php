<?php

	# find odd or even number between 0 to 100 number

	$n = 10;

	for ($i = 0; $i < $n; $i++)
	{
		if ($i % 2 == 0)
		{
			echo ("<div> number ".$i." is even </div>");
		}
		else
		{
			echo ("<div> number ".$i." is odd </div>");
		}
	}
?>
