<?php



//for($i=1;$i<15;$i++)
  //$num["$i"]=$_SESSION["$i"];
session_start();
$c=1;
$e=0;
for($i=1;$i<=15;$i++)
{
   $x=$_SESSION["'$i'"];
   $y=$_POST["$i"];

   if($x==$y)
	   $e++;

}

echo "result:$e";
$a=$_SESSION['contact'];

$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );
$sqlst="update cycregisterations set results=$e where contactno=$a";
$x=mysql_query($sqlst,$con);
$_SESSION['welcomemsg']="Thankyou for taking the test....";
header("location:welcome.php");
?> 
