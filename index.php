<html>
<head>
<title>RHS</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body style="background-image:url(rec.jpg);">
<?php include 'header.php'; ?>
<div class="box">
<center><form action="admin.php" method="POST"><br><br>
  <h4>ADMIN LOGIN</h4><br>
  <input type="text" class="input" name="uname" placeholder="Username" required/><br>
  <input type="password" class="input" name="pwd" placeholder="Password" required/><br>
  <input class="sub" type="submit" value="LOG IN"/>
</form></center>
</div>
<div class="box1">
<center><form action="resume.php" method="POST">
  <h4>SUBMIT RESUME</h4>
  <input type="text" class="input" name="name" placeholder="Candidate Name" required/>
  <input type="email" class="input" name="email" placeholder="Candidate E-Mail" required/>
  <input type="text" class="input" name="mobile" placeholder="10 - Digit Mobile Number" required/>
  <select name="skill">
    <option value="" disabled selected>SELECT YOUR SKILL</option>
    <option value="C">C PROGRAMMING</option>
    <option value="JAVA">JAVA</option>
    <option value="PYTHON">PYTHON</option>
  </select>
  <input class="sub" type="submit" value="SUBMIT"/>
</form></center>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
