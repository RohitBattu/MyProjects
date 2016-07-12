<?php
$a=$_POST['qsns'];
$b=strtolower($a );
$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );
$sqlst="SELECT branch from current";
$result=mysql_query($sqlst,$con );
$row=mysql_fetch_array($result );
$br=$row['branch'];
$flag=0;
$br=strtolower($br );
$sqlst="SELECT qsn FROM $br";
$result=mysql_query($sqlst,$con );
while($row=mysql_fetch_array($result ))
{
   $c=$row['qsn'] ;
   echo $c;
   $e=strtolower($c );
  		  
	 if($e==$b )
	{
	      $flag=1;
		  $e=$c;
		  break;
	 }
}

if($flag==1 )
{
$sql="DELETE FROM $br WHERE qsn='$e' ";
if(mysql_query($sql,$con ))
	{
         mysql_close($con );
		 header("location:delete4.php" );
	}
}

else
{
        mysql_close($con );
		header("location:delete5.php" );
}
?>