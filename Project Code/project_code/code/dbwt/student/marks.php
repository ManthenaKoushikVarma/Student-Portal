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
?>
<html>
<head>
<title>Marks</title>
<link rel="stylesheet" href="/dbwt/css.css">
</head>
<body>
<div class="intro"><h1>MARKS</h1></div><br/>
<div class="body" style="width:10cm;font-weight:bold;height:29cm;font-size:20;padding:0.2cm;">
<h2 style="text-align:center;padding:0cm;background-color:lightgray;margin:0;">Pre Final - 1</h2><br>
<table width="500" cellpadding=5 cellspacing=5 border=1 style="background-color:white;margin:auto;opacity:0.9;width:95%;border-collapse:collapse;">
     
        <tr>
		    <th>English</th>
			<th><?php echo $row['e1']; ?> </th>
		</tr>
		<tr>
		    <th>Sanskrit</th>
			<th><?php echo $row['s1']; ?> </th>
		</tr>
		<tr>
		    <th>Mathemantics</th>
			<th><?php echo $row['m1']; ?> </th>
		</tr>
		<tr>
		    <th>Physics</th>
			<th><?php echo $row['p1']; ?> </th>
		</tr>
		<tr>
		    <th>Chemistry</th>
			<th><?php echo $row['c1']; ?> </th>
		</tr>
 </table> <br/>
 <h2 style="text-align:center;padding:0cm;background-color:lightgray;margin:0;">Pre Final - 2</h2><br>
<table width="500" cellpadding=5 cellspacing=5 border=1 style="background-color:white;margin:auto;opacity:0.9;width:95%;border-collapse:collapse;">
     
        <tr>
		    <th>English</th>
			<th><?php echo $row['e2']; ?> </th>
		</tr>
		<tr>
		    <th>Sanskrit</th>
			<th><?php echo $row['s2']; ?> </th>
		</tr>
		<tr>
		    <th>Mathemantics</th>
			<th><?php echo $row['m2']; ?> </th>
		</tr>
		<tr>
		    <th>Physics</th>
			<th><?php echo $row['p2']; ?> </th>
		</tr>
		<tr>
		    <th>Chemistry</th>
			<th><?php echo $row['c2']; ?> </th>
		</tr>
 </table> <br/>
 <h2 style="text-align:center;padding:0cm;background-color:lightgray;margin:0;">Pre Final - 3</h2><br>
<table width="500" cellpadding=5 cellspacing=5 border=1 style="background-color:white;margin:auto;opacity:0.9;width:95%;border-collapse:collapse;">
     
        <tr>
		    <th>English</th>
			<th><?php echo $row['e3']; ?> </th>
		</tr>
		<tr>
		    <th>Sanskrit</th>
			<th><?php echo $row['s3']; ?> </th>
		</tr>
		<tr>
		    <th>Mathemantics</th>
			<th><?php echo $row['m3']; ?> </th>
		</tr>
		<tr>
		    <th>Physics</th>
			<th><?php echo $row['p3']; ?> </th>
		</tr>
		<tr>
		    <th>Chemistry</th>
			<th><?php echo $row['c3']; ?> </th>
		</tr>
 </table> <br/>
 <h2 style="text-align:center;padding:0cm;background-color:lightgray;margin:0;">Pre Final - 4</h2><br>
<table width="500" cellpadding=5 cellspacing=5 border=1 style="background-color:white;margin:auto;opacity:0.9;width:95%;border-collapse:collapse;">
     
        <tr>
		    <th>English</th>
			<th><?php echo $row['e4']; ?> </th>
		</tr>
		<tr>
		    <th>Sanskrit</th>
			<th><?php echo $row['s4']; ?> </th>
		</tr>
		<tr>
		    <th>Mathemantics</th>
			<th><?php echo $row['m4']; ?> </th>
		</tr>
		<tr>
		    <th>Physics</th>
			<th><?php echo $row['p4']; ?> </th>
		</tr>
		<tr>
		    <th>Chemistry</th>
			<th><?php echo $row['c4']; ?> </th>
		</tr>
 </table> <br/>
<a href="index.php" style="width:90%;" >Back</a>
</div>
</body>
</html>