	<html>
<head>
<title>Add</title>
<link rel="stylesheet" href="/dbwt/css.css">
<?php include 'database.php';
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $dob=$_POST['dob'];
   $gender=$_POST['gender'];
   $section=$_POST['section'];
   $email=$_POST['email'];
   $phoneno=$_POST['phoneno'];
   mysqli_query($link,"INSERT INTO b1 (firstname,lastname,dob,gender,section,email,phoneno,e1,s1,m1,p1,c1,e2,s2,m2,p2,c2,e3,s3,m3,p3,c3,e4,s4,m4,p4,c4) VALUES('$firstname','$lastname','$dob','$gender','$section','$email','$phoneno','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00','00.00')"); 
?>
</head>
<body>

<br/>
<br/>
<br/>
<div class="body">
   <h1 style="text-align:center;">Added</h1>
   <br/>
   <br/>
   <br/>
   <a href="a1.php" style="float:left;">Back</a>
   <a href="/dbwt/admin/index.php" style="float:right;">Home</a>
    
</div>
</body>
</html>
