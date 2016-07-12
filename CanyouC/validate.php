<?php
session_start();

$a=$_POST['contact'];
$b=$_POST['password'];


$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );

$sql="select contactno,password from cycregisterations where contactno=$a";
$res=mysql_query($sql,$con);

$row=mysql_fetch_array($res);

if($row['contactno']==$a&&$row['password']==$b){
$_SESSION['contact']=$a;
header("location:welcome.php");
}
else{

$_SESSION['loginmsg']="Invalid combination..please try again";
header("location:login.php");
}
?>