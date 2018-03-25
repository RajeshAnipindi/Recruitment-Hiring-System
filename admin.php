<?php
session_start(); // Starting Session
// Define $username and $password
$username=$_POST['uname'];
$password=$_POST['pwd'];
// Details Match
if ($username == "aditya" && $password == "aditya") {
$_SESSION['login_user']=$username; // Initializing Session
header("Location: admin_success.php"); // Redirecting To Other Page
} else {
echo '<script>alert("Invalid Username or Password");</script>';
header('Refresh:0;url=index.php');
}
?>