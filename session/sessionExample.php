<?php

    session_start();    // Start the session

    // Check if the "reset:  button  was clicked

    if (isset($_REQUEST['reset']))
    {
        session_reset();    // Reset the session, keeping it active
    }

    // Check if the "destory" button was clicked

    if (isset($_REQUEST['destory']))
    {
        session_destroy();  // Destory the session completely

        session_start();    // Start a new session after destorying the old one 
    }

    // Set or retrive a session variable

    if (isset($_REQUEST['username']))
    {
        $_SESSION['username'] = $_REQUEST['username'];
    }

    // Display the user's name

    $username = isset($_SESSION['username'])? $_SESSION['username'] : 'MasterMayank';

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MayankDevil </title>

</head>

<body>

    <!-- welcome the user -->
    
    <h1> Welcome, <?php echo $username; ?>! </h1>   

    <!-- form -->

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

        <!-- user field -->

        <div>

            <label for="username"> Enter Username =  </label>

            <input type="text" name="username" id="username">

        </div>

        <!-- buttons -->

        <div>

            <input type="submit" name="submit" value="Submit">

            <input type="submit" name="reset" value="Reset">

            <input type="submit" value="destory" id="destory">

        </div>

    </form>
    
</body>

</html>