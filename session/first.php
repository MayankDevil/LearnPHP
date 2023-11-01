<?php
	session_start();
	
	if (isset($_SESSION['clientID']))
	{
		$client = $_SESSION['clientID'];
	}
	else
	{
		$_SESSION['clientID'] = 'admin';
	}
	$_SESSION['roles'] = ['administrator', 'approver', 'editor'];
?>

<html>
<head>
    <title>PHP Session Demo</title>
</head>
<body>
    <a href="profile.php">Go to profile page</a>
</body>
</html>