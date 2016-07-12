<?php
$b=$_POST['sel'];
if($b == "VIEW STUDENT PERFORMANCE" )
 header("location: results.php"); 
 else if($b=="ENTER QUESTIONS")
  header ("location: qsns.php" );
  else if($b=="DELETE QUESTIONS")
  header ("location:delete.php" );
  else
  header ("location:Signupp.php" );
?>