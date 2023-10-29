<?php

	# primeNumber.php : fnd the number is prime or not

	$n = 11;

	$is_prime =  true;

	$i = 2;

	while ($i < $n)
	{
		if ($n % $i == 0) $is_prime = false;
		
		$i++;
	}
	// for ($i = 2; $i < $n; $i++) if ($n % $i == 0) $is_prime = false;

	if ($is_prime) echo(" prime "); else echo(" not prime ");

?>
