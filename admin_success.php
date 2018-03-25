<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body style="background-image:url(rec.jpg);">
<center>
<form action="retreived.php" target="_blank" method="POST" style="margin-top:150px;">
  <br/><h4>Welcome ! <?php echo $user_check; ?></h4><br/>
  <select name="skill" required>
  <option value="" disabled selected>SELECT A SKILL</option>
  <option value="C">C PROGRAMMING</option>
  <option value="JAVA">JAVA</option>
  <option value="PYTHON">PYTHON</option>
  </select><br/>
  <input class="sub" type="submit" name="submitted" value="SHOW DETAILS"/>
</form>
</center>
</body>
</html>
