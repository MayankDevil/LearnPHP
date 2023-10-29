<?php

$s = "Welcome PHP";

echo strlen($s);

echo strtoupper($s);

echo strtolower($s);

echo str_replace("PHP","Mayank",$s);

echo substr($s,3,4);

echo trim($s);

echo strpos($s,"come");

echo strrev($s);

echo str_split($s,3);

$s2 = "Welcome PHP";

echo strcmp($s,$s1);

echo strcasecmp($s,$s1);

echo str_repeat($s,3);

$s2 = "<script> alert('hello'); </script>";

echo htmlspecialchars($s2,ENT_QUOTES,'UTF-8');


/*
 11WELCOME PHPwelcome phpWelcome MayankcomeWelcome PHP3PHP emocleWArray1111Welcome PHPWelcome PHPWelcome PHP<script> alert('hello'); </script>
*/ 

?>