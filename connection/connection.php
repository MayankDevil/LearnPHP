<?php

    $connection = mysqli_connect("localhosts","root","","vip");
    /*
        mysqli_connect() : function return connection true

        take arguments :-

        1 : hostname {x}
        2 : username {x}
        3 : password
        4 : database
    */ 
    if ($connection)
    {
        echo (" connection successfully ");
    }
    else
    {
        die (mysqli_connect_errno()." connection error : ".mysqli_connect_error());
    }
    $query = "insert into onam values(2)";

    $result = mysqli_query($connection,$query);
    /*
        mysqli_query(); : function return response of mysqli 
    
        take arguments :-

        1 :  connection     {x}
        2 :  query          {x}
    */
    if (mysqli_close($connection))
    {
        echo (" connection closed ");
    }
    /*
        mysqli_close : function return ture false of connection cut

        take argument :-

        1 :     connection  {x}
    */ 
?>