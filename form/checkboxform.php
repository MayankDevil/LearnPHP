<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get form values</title>
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF']?>">

        <label for="">
            <input type="checkbox" name="color[]" value="red"> red
        </label>
        <label for="">
            <input type="checkbox" name="color[]" value="yellow"> yellow
        </label>
        <label for="">
            <input type="checkbox" name="color[]" value="green"> green
        </label>
        <label for="">
            <input type="checkbox" name="color[]" value="blue"> blue
        </label>

        <div>
            <input type="submit" value="Login" name="submit">
        </div>

    </form>

    <?php

        if (isset($_REQUEST['submit']))
        {
            $name = $_GET['color'];

            foreach ($name as $color)
            { 
                echo "<div>".$color."</div>";
            }
        }

    ?>
    
</body>
</html>