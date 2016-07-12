<?php
$a=$_POST['selc'];
$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );
$sqlst="SELECT branch from current";
$result=mysql_query($sqlst,$con );
$row=mysql_fetch_array($result );
$b=$row['branch'];
    
if($a== "DELETE ALL QUESTIONS" )
{
    $sql="delete from $b";
	if(mysql_query($sql,$con ))
	{	
    	mysql_close($con );
		header("location:delete2.php" );
 	}
}

else 
{
       
		header("location:delete3.php" );
         mysql_close($con );
}
?>