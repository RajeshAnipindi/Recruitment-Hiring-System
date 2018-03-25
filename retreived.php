<html>
<head>
<title>Registered candidates</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style type="text/css">
    *{
        font-family:'Montserrat',sans-serif;
        color:white;
    }
    table {
     width:80%;
     text-align: center;
    }
    th{
        height:50px;
        background-color: #17A199;
    }
    td{
        padding: 5px;
       border-bottom: 2px solid gray; 
    }
    #submit{
        margin-top: 10px;
        background-color: #17A199;
        border-color:#17A199;
        color: white;
        width:auto;
        height:50px;
        border-radius: 10px;
    }
    #submit:hover{
        background-color: #2B5E90;
        border-color:#2B5E90;
    }
</style>
</head>
<body style="background-image:url(blur2.jpg);background-size:cover;background-attachment:fixed;">
</body>
</html>
<?php
if(isset($_POST["submitted"])){

$skill=$_POST['skill'];
// DB Connection
mysql_connect('localhost','root','root') or die(mysql_error());

mysql_select_db('hackathon')  or die("cannot connect to database");


     $result = mysql_query("SELECT * FROM resume where SKILL='$skill'");

     if(mysql_num_rows($result)>0){
        echo "<center><h2>CANDIDATES SKILLED IN ";echo $skill;"</h2></center><br><br/>";
     	echo "<center><table><tr><th>UNIQUE ID</th><th>NAME</th><th>E-MAIL</th><th>MOBILE</th><th>SKILL</th><th>NOTIFY</th></tr>";
	   while($row=mysql_fetch_assoc($result)) {

        echo "<tr><td>".$row['ID']."</td>";
        echo "<td>".$row['NAME']."</td>";
        echo "<td>".$row['EMAIL']."</td>";
        echo "<td>".$row['MOBILE']."</td>";
        echo "<td>".$row['SKILL']."</td>";
        echo "<td><form action='sendmail.php' method='POST'><input type='hidden' name='mail_selected' value='".$row["EMAIL"]."'/><input type='submit' name='submit-btn' id='submit' value='NOTIFY' /></form></td></tr>";
    
          }
     echo "</table></center><br><br>";
mysql_close();
}
}
?>
<form action="excel.php" name="excel" method="POST">
    <input type="hidden" name="skillvar" value="<?php echo $skill; ?>">
    <input type="submit" id="submit" value="EXPORT AS EXCEL" width="500px">
</form>