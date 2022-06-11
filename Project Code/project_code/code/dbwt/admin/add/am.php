<?php include 'database.php';

   $phoneno=$_POST['phoneno'];
   
   mysqli_query($link,"INSERT INTO marks (id) VALUES (SELECT id FROM b1 WHERE phoneno='$phoneno')");
   header("location: a1p.php");

?>