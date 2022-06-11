<?php include'database.php';
$id=$_POST['id'];
$e3=$_POST['e3'];
$s3=$_POST['s3'];
$m3=$_POST['m3'];
$p3=$_POST['p3'];
$c3=$_POST['c3'];
if($id<2001){
if(mysqli_query($link,"UPDATE b1 SET e3='$e3',s3='$s3',m3='$m3',p3='$p3',c3='$c3' WHERE id='$id'")){echo "Success";}
else{echo "Failed";}
}
else{
if(mysqli_query($link,"UPDATE b2 SET e3='$e3',s3='$s3',m3='$m3',p3='$p3',c3='$c3' WHERE id='$id'")){echo "Success";}
else{echo "Failed";}	
}
session_start();
$year=$_SESSION['year'];
$section=$_SESSION['section'];
$exam=$_SESSION['exam'];
?>
<html>
<head>
<script>
function submit(){
	document.getElementById("form").submit();
}
</script>
</head>
<body onload="submit()">
<form id="form" method="post" action="marksp.php">
     <input type="hidden"  id="year" name="year" value="<?php echo $year; ?>"  type="hidden" >
     <input type="hidden"  id="section" name="section" value="<?php echo $section; ?>"  type="hidden" >
	<input type="hidden"  id="exam" name="exam" value="<?php echo $exam; ?>"  type="hidden" >
  </form>
</body>
</html>
