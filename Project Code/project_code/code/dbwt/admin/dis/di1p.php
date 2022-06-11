<html>
<head>
<title>Display</title>
<link rel="stylesheet" href="/dbwt/css.css">
<?php include 'database.php';
$section=$_POST['section'];
$result=mysqli_query($link,"SELECT * FROM b1 WHERE section='$section' ORDER BY id");  
?>
</head>
<body>
<div class="intro"><h1> Section : <?php echo "$section"; ?> </h1></div>
<br/> 
   <table width="500" cellpadding=5 cellspacing=5 border=1 style="background-color:white;margin:auto;opacity:0.9;width:95%;border-collapse:collapse;">
     
        <tr  style="background-color:lightgray;">
		    <th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Data of Birth</th>
			<th>Gender</th>
			<th>Section</th>
			<th>Email Id</th>
			<th>Phone Number</th>
		</tr>
		<?php while($row=mysqli_fetch_array($result)):?>
        <tr>
		    <th><?php echo $row['id']; ?></th>
			<th><?php echo $row['firstname']; ?></th>
			<th><?php echo $row['lastname']; ?></th>
			<th><?php echo $row['dob']; ?></th>
			<th><?php echo $row['gender']; ?></th>
			<th><?php echo $row['section']; ?></th>
			<th><?php echo $row['email']; ?></th>
			<th><?php echo $row['phoneno']; ?></th>
		</tr>
        <?php endwhile; ?>
 </table> <br/><br/>  
 <a href="di1.php" style="float:left;width:3cm;" >Back</a>
 <a href="/dbwt/admin/index.php" style="float:right;width:3cm;">Home</a>
</body>
</html>