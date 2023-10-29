<?php

    # the function take argument at call time that called parameterfunction

    function hello($name)
	{
		echo ("<div> welcome ".$name."</div>");
	}

	hello("Mayank");

	hello("PHPuser");

?>