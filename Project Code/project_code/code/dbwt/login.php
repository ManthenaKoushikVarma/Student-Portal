<?php include 'database.php';
 $id=trim($_POST["id"]);
 $password=trim($_POST["password"]);
 $query1=mysqli_query($link,"SELECT * FROM admin WHERE id= '$id' AND password='$password'");
 $query2=mysqli_query($link,"SELECT * FROM staff WHERE id= '$id' AND password='$password'");
 $query3=mysqli_query($link,"SELECT * FROM b1   WHERE id= '$id' AND password='$password'");
 $query4=mysqli_query($link,"SELECT * FROM b2   WHERE id= '$id' AND password='$password'");
 session_start();
 $_SESSION['id']=$id;
?>
<html>
<head>
<meta http-equiv="Refresh" content="5;url=home.php">
</head>

<body>
<?php
if(mysqli_num_rows($query1)==1){
	 header("location: admin/index.php");
}
else if(mysqli_num_rows($query2)==1){
	 header("location: staff/index.php");
}
else if(mysqli_num_rows($query3)==1 OR mysqli_num_rows($query4)==1){
	 header("location: student/index.php");
}
else{
echo "Invalid Id or Password. You can try again in 5 seconds.";
}
?>
</body>

</html>








