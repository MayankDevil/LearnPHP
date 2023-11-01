<?php

    if ($_COOKIE['CODE'] != "open")
    {
        header("location:cookies.php");
    }
    else
    {
        echo " <h1> Welcome to Dashboard </h1> ";
    }

?>