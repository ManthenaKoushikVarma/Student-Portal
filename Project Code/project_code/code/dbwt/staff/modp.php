<html>
<head>
<title>Modify</title>
<link rel="stylesheet" href="/dbwt/css.css">
<?php include "database.php";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
session_start();
$id=$_SESSION['id'];
?>
</head>
<body>
<br/>
<br/>
<br/>
<div class="body" style="text-align:center;font-weight:bold;font-size:0.7cm;"/>
 <?php
 
	mysqli_query($link," UPDATE staff SET firstname='$firstname',lastname='$lastname',dob='$dob',gender='$gender',subject='$subject',email='$email',phoneno='$phoneno' WHERE id='$id'");
 echo"Modified";	


 ?>
 <br/>
 <br/>
 <br/>
 <br/>
   <a href="mod.php" style="float:left;">Back</a>
   <a href="index.php" style="float:right;" >Home</a>

</div>
</body>
</html>