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
<title>student</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css.css">
</head>
<body>
<div class="intro" >
<table style="width:100%;">
       <tr>
            <th style="text-align:left;"><h1>STUDENT ID: <?php echo"$id";?> </h1></th>
            <th><a href="/dbwt/home.php" style="float:right;width:26.1%;">Log Out</a></th>
      </tr>
</table> 
</div>
<div class="menu">
      <a href="tt.php">Timetable</a>
      <a href="marks.php">Marks</a>
      <a href="mod.php">Modify Details</a>
      <a href="cp.php">Change Password</a>
</div> 
<br/>
<br/>
<table width="1200" height="500" cellpadding=5 cellspacing=5 border=1 style="background-color:white;margin:auto;border-collapse:collapse;">
     
        <tr>
		    <th>Id Number</th>
			<th><?php echo $row['id']; ?> </th>
		</tr>
		<tr>
		    <th>First Name</th>
			<th><?php echo $row['firstname']; ?> </th>
		</tr>
		<tr>
		    <th>Last Name</th>
			<th><?php echo $row['lastname']; ?> </th>
		</tr>
		<tr>
		    <th>Date of Birth</th>
			<th><?php echo $row['dob']; ?> </th>
		</tr>
		<tr>
		    <th>Gender</th>
			<th><?php echo $row['gender']; ?> </th>
		</tr>
		<tr>
		    <th>Section</th>
			<th><?php echo $row['section']; ?> </th>
		</tr>
		<tr>
		    <th>Email Id</th>
			<th><?php echo $row['email']; ?> </th>
		</tr>
		<tr>
		    <th>Phone Number</th>
			<th><?php echo $row['phoneno']; ?> </th>
		</tr>	
</table> <br/>

</body>
</html>
