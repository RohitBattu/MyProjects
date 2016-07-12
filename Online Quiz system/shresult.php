<?php

$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );

$sql="select branch from current";
$result=mysql_query($sql,$con );
$rows=mysql_fetch_array($result );
$a=$rows['branch'];
$sqlst="select ans from $a";
$res=mysql_query($sqlst,$con );
$c=1;
$e=0;
while($row=mysql_fetch_array($res ))
{
   $b=$_POST["$c" ];
   $d=$row['ans'];
   if($b==$d )
	   $e++;
	$c++;
}
echo "your result is $e";
?>

<form action="main3.php">
<input type="submit" value="LOGOUT">
</form>
