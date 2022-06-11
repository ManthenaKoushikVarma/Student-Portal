<html>
<head>
<title>Display</title>
<link rel="stylesheet" href="/dbwt/css.css">
<?php include 'database.php';
$result=mysqli_query($link,"SELECT * FROM staff ORDER BY id");
?>
</head>
<body>
<div class="intro"><h1>STAFF DETAILS</h1></div>
<br/> 
   <table width="500" cellpadding=5 cellspacing=5 border=1 style="background-color:white;margin:auto;opacity:0.9;width:80%;border-collapse:collapse;">
     
        <tr  style="background-color:lightgray;">
		    <th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Data of Birth</th>
			<th>Gender</th>
            <th>Subject</th>
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
			<th><?php echo $row['subject']; ?></th>
			<th><?php echo $row['email']; ?></th>
			<th><?php echo $row['phoneno']; ?></th>
		</tr>
        <?php endwhile; ?>
 </table><br/><br/> 
 <a href="/dbwt/admin/index.php" style="float:left; width:3cm;" >Back</a>
 <a href="/dbwt/admin/index.php" style="float:right;width:3cm;">Home</a>
</body>
</html>