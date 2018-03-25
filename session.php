<?php
// Starting Session
session_start();
// Storing Session
$user_check=$_SESSION['login_user'];
if(!$user_check)
{
	echo '<script>alert("Please Login First");</script>';
	header('Refresh:0;url=index.php');
}
// Destroying Session
session_destroy();
?>