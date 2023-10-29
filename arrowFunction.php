<?php

	// test.php : testing php

	$isEqual = fn ($data, $value) => $value == $data;


	if ($isEqual(9211,92110))
	{
		echo("valid password");
	}
	else
	{
		echo ("unvalid password");
	}

?>
