<?php include'database.php';
$id=$_POST['id'];
$e4=$_POST['e4'];
$s4=$_POST['s4'];
$m4=$_POST['m4'];
$p4=$_POST['p4'];
$c4=$_POST['c4'];
if($id<2001){
if(mysqli_query($link,"UPDATE b1 SET e4='$e4',s4='$s4',m4='$m4',p4='$p4',c4='$c4' WHERE id='$id'")){echo "Success";}
else{echo "Failed";}
}
else{
if(mysqli_query($link,"UPDATE b2 SET e4='$e4',s4='$s4',m4='$m4',p4='$p4',c4='$c4' WHERE id='$id'")){echo "Success";}
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
