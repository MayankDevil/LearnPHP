<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get form values</title>
</head>
<body>

    <form>

        <div>
            <label for="username"> Enter Username : </label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="number"> Enter Number : </label>
            <input type="tel" name="number" id="number">
        </div>
        <div>
            <label for="mail"> Enter Email-Id : </label>
            <input type="email" name="email" id="mail">
        </div>
        <div>
            <label for="password"> Enter Password : </label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <input type="submit" value="Login" name="submit">
        </div>

    </form>

    <?php

        if (isset($_REQUEST['submit']))
        {
            echo "<div>".$_REQUEST['username']."</div>";
            echo "<div>".$_REQUEST['number']."</div>";
            echo "<div>".$_REQUEST['email']."</div>";
            echo "<div>".$_REQUEST['password']."</div>";
        }

    ?>
    
</body>
</html>