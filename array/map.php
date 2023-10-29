<?php

    function product($n)
    {
        return($n*$n);
    }

    $a=array(1,2,3,4,5);
    
    print_r(array_map("product",$a));

    /*
        Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 ) 
    */

?> 