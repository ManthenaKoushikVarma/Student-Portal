<html>
<head>
<title>Add</title>
<link rel="stylesheet" href="/dbwt/css.css">
<?php include 'database.php';
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $dob=$_POST['dob'];
   $gender=$_POST['gender'];
   $subject=$_POST['subject'];
   $email=$_POST['email'];
   $phoneno=$_POST['phoneno'];
   mysqli_query($link,"INSERT INTO staff (firstname,lastname,gender,dob,subject,email,phoneno) VALUES('$firstname','$lastname','$gender','$dob','$subject','$email','$phoneno')"); 
?>
</head>
<body>
<br/>
<br/>
<br/>
<div class="body">
   <h1 style="text-align:center;">Added</script></h1>
   <br/>
   <br/>
   <br/>
   <a href="adds.php" style="float:left;">Back</a>
   <a href="/dbwt/admin/index.php" style="float:right;" >Home</a>

</div>
</body>
</html>
	