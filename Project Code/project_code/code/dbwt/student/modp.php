<html>
<head>
<title>Modify</title>
<link rel="stylesheet" href="/dbwt/css.css">
<?php include "database.php";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$section=$_POST['section'];
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
 if($id<2001){
	mysqli_query($link," UPDATE b1 SET firstname='$firstname',lastname='$lastname',dob='$dob',gender='$gender',section='$section',email='$email',phoneno='$phoneno' WHERE id='$id'");
 echo"Modified";	
}
else{
	mysqli_query($link," UPDATE b2 SET firstname='$firstname',lastname='$lastname',dob='$dob',gender='$gender',section='$section',email='$email',phoneno='$phoneno' WHERE id='$id'");
 echo"Modified";	
}

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