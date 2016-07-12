<?php
$a=$_POST['unn'];
$b=$_POST['sel'];
if($b == "TAKE EXAM")
 header("location: exam.php"); 
 else
  header ("location: results.php" );
?>