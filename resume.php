<?php
//Storing form data into variables
$name= $_POST["name"];
$email= $_POST["email"];
$mobile= $_POST["mobile"];
$skill= $_POST["skill"];
//Connecting to Database
mysql_connect('localhost:3306','root','root') or die(mysql_error());

mysql_select_db('hackathon')  or die("cannot connect to database");

$sql="INSERT INTO resume(NAME,EMAIL,MOBILE,SKILL) VALUES('$name','$email','$mobile','$skill')";

$result=mysql_query($sql);
if($result){
	echo "Registration Success";
}
else{
	echo "Failed";
}
?>