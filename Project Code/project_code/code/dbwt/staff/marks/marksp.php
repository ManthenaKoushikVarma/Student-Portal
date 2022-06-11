<html>
<head>
<title>Marks</title>
<link rel="stylesheet" href="/dbwt/css.css">
<?php include 'database.php';
$year=$_POST['year'];
$section=$_POST['section'];
$exam=$_POST['exam'];

session_start();
$_SESSION['year']=$year;
$_SESSION['section']=$section;
$_SESSION['exam']=$exam;

if($year==1){
$result=mysqli_query($link,"SELECT * FROM b1 WHERE section='$section' ORDER BY id");  
}
else{
$result=mysqli_query($link,"SELECT * FROM b2 WHERE section='$section' ORDER BY id");  	
}

  ?>

</head>
<body>
<div class="intro"><h1> Marks </h1><p> <?php echo "Year :".$year.",\n Section:".$section.",\n Prefinal:".$exam; ?> </p></div>
<br/> 
<?php echo $exam ?>
   <table width="500" cellpadding=5 cellspacing=5 border=1 style="background-color:white;margin:auto;opacity:0.9;width:80%;border-collapse:collapse;">
     
        <tr  style="background-color:lightgray;">
		    <th>Id No</th>
			<th>English</th>
			<th>Sanskrit</th>
			<th>Mathematics</th>
			<th>Physics</th>
			<th>Chemistry</th>
			<th> Add</th>
		</tr>
		
	<?php if($exam==1):
       while($row=mysqli_fetch_array($result)):?>
       <form  method="post" action="pf1.php">
		    <th><input type="text" name="id" placeholder="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>" </th>
			<th><input type="float" name="e1" placeholder="<?php echo $row['e1']; ?>" /></th>
			<th><input type="float" name="s1"  placeholder="<?php echo $row['s1'];?>"/></th>
			<th><input type="float" name="m1"  placeholder="<?php echo $row['m1'];?>" /></th>
			<th><input type="float" name="p1"  placeholder="<?php echo $row['p1'];?>" /></th>
			<th><input type="float" name="c1"  placeholder="<?php echo $row['c1'];?>" /></th>
			<th><input type="submit" name="Add" value="Add"/></th>
		</tr></form>
	<?php endwhile; 
	endif;?>
	
	<?php if($exam==2):
       while($row=mysqli_fetch_array($result)):?>
       <form  method="post" action="pf2.php">
		    <th><input type="text" name="id" placeholder="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>" </th>
			<th><input type="float" name="e2" placeholder="<?php echo $row['e2']; ?>" /></th>
			<th><input type="float" name="s2"  placeholder="<?php echo $row['s2'];?>"/></th>
			<th><input type="float" name="m2"  placeholder="<?php echo $row['m2'];?>" /></th>
			<th><input type="float" name="p2"  placeholder="<?php echo $row['p2'];?>" /></th>
			<th><input type="float" name="c2"  placeholder="<?php echo $row['c2'];?>" /></th>
			<th><input type="submit" name="Add" value="Add"/></th>
		</tr></form>
	<?php endwhile; 
	endif;?>
	
	<?php if($exam==3):
       while($row=mysqli_fetch_array($result)):?>
       <form  method="post" action="pf3.php">
		    <th><input type="text" name="id" placeholder="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>" </th>
			<th><input type="float" name="e3" placeholder="<?php echo $row['e3']; ?>" /></th>
			<th><input type="float" name="s3"  placeholder="<?php echo $row['s3'];?>"/></th>
			<th><input type="float" name="m3"  placeholder="<?php echo $row['m3'];?>" /></th>
			<th><input type="float" name="p3"  placeholder="<?php echo $row['p3'];?>" /></th>
			<th><input type="float" name="c3"  placeholder="<?php echo $row['c3'];?>" /></th>
			<th><input type="submit" name="Add" value="Add"/></th>
		</tr></form>
	<?php endwhile; 
	endif;?>
	
	<?php if($exam==4):
       while($row=mysqli_fetch_array($result)):?>
       <form  method="post" action="pf4.php">
		    <th><input type="text" name="id" placeholder="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>" </th>
			<th><input type="float" name="e4" placeholder="<?php echo $row['e4']; ?>" /></th>
			<th><input type="float" name="s4"  placeholder="<?php echo $row['s4'];?>"/></th>
			<th><input type="float" name="m4"  placeholder="<?php echo $row['m4'];?>" /></th>
			<th><input type="float" name="p4"  placeholder="<?php echo $row['p4'];?>" /></th>
			<th><input type="float" name="c4"  placeholder="<?php echo $row['c4'];?>" /></th>
			<th><input type="submit" name="Add" value="Add"/></th>
		</tr></form>
	<?php endwhile; 
	endif;?>
	
	
	
	
	
	
	
	
	
	
	
	
 </table> <br/><br/>  
 <a href="marks.php" style="float:left;width:3cm;" >Back</a>
 <a href="/dbwt/staff/index.php" style="float:right;width:3cm;">Home</a>
</body>
</html>
