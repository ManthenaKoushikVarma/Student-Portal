<html>
<head>
<title>Delete</title>
<link rel="stylesheet" href="/dbwt/css.css">
<?php include "database.php";
$id =$_POST['id'];
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
	mysqli_query($link,"DELETE FROM staff WHERE id='$id'");
	echo"Deleted";
}
else{
echo "ID not found!";
}
 ?>
 <br/>
 <br/>
 <br/>
 <br/>
   <a href="ds.php" style="float:left;">Back</a>
   <a href="/dbwt/admin/index.php" style="float:right;" >Home</a>

</div>
</body>
</html>