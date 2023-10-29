<?php

    # Write a programe to print Local and Global variables in php

    echo"<h1> Global and local variables in php</h1>";
    $x= 10; 
    function g() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: ".$x."</p>";
    }
    g();
    echo "<p>Variable x outside function is:".$x."</p>";
    echo"<h2>global varibales is</h2>";
    $x = 5;
    $y = 10;

    function z() {
    global $x, $y;
    $y = $x + $y;
    }

    z();
    echo $y; 
    echo"<h3>static varibales is</h3>";
    function fun() {
    static $x = 0;
    echo $x;
    $x++;
    }

    fun();
    fun();
    fun();
?>