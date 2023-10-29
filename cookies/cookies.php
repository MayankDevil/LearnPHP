<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Testing</title>
</head>
<body>

    <form>

        <div>
            <label for="username"> Enter Username : </label>
            <input type="text" name="username" id="username">
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
            setcookie("CODE",$_REQUEST['password'],time() + (60*60));

            /*setcookie( string $name [, string $value = "" [, int $expires = 0 [, string $path = "" [, string $domain = "" [, bool $secure [, bool $httponly [, array $options = [] ]]]]]]])*/ 

            header("location:welcome.php"); // redirect to welcome
        }

    ?>
    
</body>
</html>