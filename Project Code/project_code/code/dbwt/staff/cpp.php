<?php include 'database.php';
   session_start();
   $id=trim($_SESSION['id']);
   $password=trim($_POST['password']);
   $cpassword=trim($_POST['cpassword']);   
?>

<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="/dbwt/css.css">
</head>
<body>
<br/>
<br/>
<div class="body" style="text-align:center;font-weight:bold;font-size:0.7cm;"/>
 <?php
 if($cpassword!=$password){
	echo "Passwords do not match";
}
elseif(strlen($password)<4){
	echo "Minimum size 4";
}
else{

mysqli_query($link,"UPDATE staff SET password = '$password' WHERE id='$id'");

	echo"Password Changed!";
}
 ?>
 <br/>
 <br/>
 <br/>
 <br/>
 
   <a href="cp.php" style="float:left;">Back</a>
   <a href="index.php" style="float:right;" >Home</a>

</div>
</body>
</html>
