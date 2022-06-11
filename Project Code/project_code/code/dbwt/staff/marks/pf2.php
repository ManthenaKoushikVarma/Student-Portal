<?php include'database.php';
$id=$_POST['id'];
$e2=$_POST['e2'];
$s2=$_POST['s2'];
$m2=$_POST['m2'];
$p2=$_POST['p2'];
$c2=$_POST['c2'];
if($id<2001){
if(mysqli_query($link,"UPDATE b1 SET e2='$e2',s2='$s2',m2='$m2',p2='$p2',c2='$c2' WHERE id='$id'")){echo "Success";}
else{echo "Failed";}
}
else{
if(mysqli_query($link,"UPDATE b2 SET e2='$e2',s2='$s2',m2='$m2',p2='$p2',c2='$c2' WHERE id='$id'")){echo "Success";}
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
