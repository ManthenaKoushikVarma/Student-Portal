<?php include'database.php';
$id=$_POST['id'];
$e1=$_POST['e1'];
$s1=$_POST['s1'];
$m1=$_POST['m1'];
$p1=$_POST['p1'];
$c1=$_POST['c1'];
if($id<2001){
if(mysqli_query($link,"UPDATE b1 SET e1='$e1',s1='$s1',m1='$m1',p1='$p1',c1='$c1' WHERE id='$id'")){echo "Success";}
else{echo "Failed";}
}
else{
if(mysqli_query($link,"UPDATE b2 SET e1='$e1',s1='$s1',m1='$m1',p1='$p1',c1='$c1' WHERE id='$id'")){echo "Success";}
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
