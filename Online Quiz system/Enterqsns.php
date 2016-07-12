<?php
$b=$_POST['qsn'];
$c=$_POST['o1'];
$d=$_POST['o2'];
$e=$_POST['o3'];
$f=$_POST['o4'];
$g=$_POST['ans'];
$i="rohit";
$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );
$sqlst="SELECT branch from current";
$result=mysql_query($sqlst,$con );
$row=mysql_fetch_array($result );
$a=strtolower($row['branch'] );
$sql="SELECT qsn from $a ";
$result=mysql_query($sql,$con );
while($row=mysql_fetch_array($result ))
{
     $x = strtoupper($b );
     $y = strtoupper($row['qsn'] );
      if($x==$y )
      {        $i = "battu";
                  break;
}
 }
if($i == "rohit")
{
$sqlst="INSERT INTO `$a`(`qsn`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES ('$b','$c','$d','$e','$f','$g')";
if(mysql_query($sqlst,$con ))
	{
mysql_close($con );

header("location: Enterqsns2.php" );
} 
}
else
{
	mysql_close($con );

header("location: Enterqsns3.php"); 
}
?>