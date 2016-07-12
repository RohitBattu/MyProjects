<?php
session_start();
$a=$_POST['fullname'];
$b=$_POST['contactno'];
$c=$_POST['emailid'];
$d=$_POST['password'];

$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );

$sql="insert into cycregisterations values('$a','$c','$b','$d',-10) ";

$i=mysql_query($sql,$con );


if($i==1)
{
  header("location:loginbefore.php");
}
else
header("location:signin.html");
?>