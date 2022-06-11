<html>
<head>
<title>Modify</title>
<link rel="stylesheet" href="/dbwt/css.css">
<?php include "database.php";
$id =$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$query=mysqli_query($link,"SELECT * FROM staff WHERE id= '$id'");
?>
</head>
<body>
<br/>
<br/>
<br/>
<div class="body" style="text-align:center;font-weight:bold;font-size:0.7cm;"/>
 <?php
 if(mysqli_num_rows($query)==1){
	mysqli_query($link," UPDATE staff SET firstname='$firstname',lastname='$lastname',dob='$dob',gender='$gender',subject='$subject',email='$email',phoneno='$phoneno' WHERE id='$id'");
 echo"Modified";	
}
else{
echo "ID not found!";
}
 ?>
 <br/>
 <br/>
 <br/>
 <br/>
   <a href="ms.php" style="float:left;">Back</a>
   <a href="/dbwt/admin/index.php" style="float:right;" >Home</a>

</div>
</body>
</html>