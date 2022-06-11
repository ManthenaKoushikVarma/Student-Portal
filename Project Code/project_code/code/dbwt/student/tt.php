<?php include 'database.php';
session_start();
$id=$_SESSION['id'];
if($id<2001){
$result=mysqli_query($link,"SELECT * FROM b1 WHERE id='$id'");	
$row=mysqli_fetch_array($result);
}
else{
	$result=mysqli_query($link,"SELECT * FROM b2 WHERE id='$id'");	
	$row=mysqli_fetch_array($result);
}
$sec= $row['section'];
?>
<html>
<head>
<title>Time Table</title>
<link rel="stylesheet" href="css.css">
</head>
<body>
<div class="intro" ><h1>TIME TABLE</h1></div>
<br/>
<br/>
<img src="/dbwt/img/tt.png" alt="ERROR" style="width:70%;height:10cm;display:block;margin-left:auto;margin-right:auto;opacity:1;">
<br/>
<br/>
<a href="index.php" style="width:70%;display: block;margin-left:auto;margin-right:auto;opacity:1;" >Back</a>
</body>
</html>