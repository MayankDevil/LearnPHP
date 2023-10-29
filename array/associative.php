<?php

    # The keys of an associative array are strings. And you use associative arrays when you want to access elements by string keys.

	$globe =
    [
		'Japan' => 'Tokyo',
		'France' => 'Paris',
		'Germany' => 'Berlin',
		'United Kingdom' => 'London',
		'United States' => 'Washington D.C.'
	];

	foreach ($globe as $country => $capital)
    {
		echo "The capital city of ".$country." is ".$capital"";
	}

?>