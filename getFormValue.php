<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getform</title>
</head>
<body>
    <h1>
        Php  Form validation in php using get
    </h1>
    <form action="p1.php" method="get">
    
        <div>
            <label for=""> Enter Name </label>
            <input type="text" name="name" id="">
        </div>

        <div>
            <label for=""> Enter Email </label>
            <input type="email" name="mail" id="">
        </div>

        <div>
            <label for=""> Enter Telephone </label>
            <input type="tel" name="phone" id="">
        </div>

        <input type="submit" name="submit_btn" value = "Log In">
    
    </form>

    <?php

        if (isset($_REQUEST['submit_btn']))
        {

            echo "<div> ${$_REQUEST['name']} </div> ";
            echo "<div> ${$_REQUEST['mail']} </div>";
            echo "<div> ${$_REQUEST['phone']} </div>";


        }

    ?>

</body>
</html>