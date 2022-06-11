<?php include 'database.php';
session_start();
$id=$_SESSION['id'];
?>
<html>
<head>
<title>Adminstration</title>
<link rel="stylesheet" href="/dbwt/css.css">
</head>
<body>
<div class="intro" >
<table style="width:100%;">
       <tr>
            <th style="text-align:left;"><h1>ADMIN ID: <?php echo"$id";?> </h1></th>
            <th><a href="cp.php" style="float:right;">Change Password</a><a href="/dbwt/home.php"  style="float:right;">Logout</a></th>
      </tr>
</table>    
</div>
<br/>
<ul>
    <li class="title">ADD DETAILS</li></br>
	 <li class="fields">
	     <a href="add/a1.php" >1st Year</a>
		 <a href="add/a2.php" >2nd Year</a>
		 <a href="add/as.php">Staff</a>
	 </li><br/>
	 <li class="title">DELETE DETAILS</li></br>
	 <li class="fields">
	     <a href="del/d1.php" >1st Year</a>
		 <a href="del/d2.php">2nd Year</a>
		 <a href="del/ds.php">Staff</a>
	 </li><br/>
	 <li class="title">MODIFY DETAILS</li></br>
	 <li class="fields">
	     <a href="mod/m1.php" >1st Year</a>
		 <a href="mod/m2.php" >2nd Year</a>
		 <a href="mod/ms.php">Staff</a>
	  </li><br/>
	  <li class="title">DISPLAY DETAILS</li></br>
	 <li class="fields">
	     <a href="dis/di1.php">1st Year</a>
		 <a href="dis/di2.php">2nd Year</a>
		 <a href="dis/dis.php">Staff</a>
	  </li><br/>
</ul>
</body>
</html>