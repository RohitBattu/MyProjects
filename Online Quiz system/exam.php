<html>
</body>
<br>
<br>
<?php
session_start();
$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );

$sqlst="SELECT firstname,branch,flag from student";
$result=mysql_query($sqlst,$con );
$row=mysql_fetch_array($result );
$b=strtolower($row['branch'] );
$c=$row['flag'];
$d=$row['firstname'];
$stt="UPDATE current SET flag=1 where firstname='$d' ";
$ff=mysql_query($stt,$con );

if($c==0 )
{
   $st="UPDATE student SET flag=1 where firstname='$d' ";
      if(mysql_query($st,$con  ))
	{
			  $sqlst="SELECT * from $b ";
              $res=mysql_query($sqlst,$con );
              ?>
               <form action="shresult.php" method="POST">

              <?php
              $i=1;
                    while($row=mysql_fetch_array($res ))
                     {
       
	   
	   ?>
	   <br>
	   <table align="center">
	   <tr>
	   <td>
	   <font size=5 color="blue">
	   Qsn:</font><?php  
		$a=$row['qsn'];   
	   echo "$a" ?>
	   
	   </td>
	   </tr>
	  </table>
	  <table align="center" cellspacing=20>
	  <tr>
	   <td>
	   <font size=3 color="blue">
	   A:</font><?php 
		    $a= $row['op1']; 
	         echo "$a";
	   ?>
	   
	   </td>
	   <td>
	   <font size=3 color="blue">
	   B:</font><?php 
		    $a= $row['op2']; 
	         echo "$a";
	   ?>
	   
	  </td>
	   <td>
	   <font size=3 color="blue">
	   C:</font><?php 
		    $a= $row['op3']; 
	         echo "$a";
	   ?>
	   
	   </td>
	   <td>
	   <font size=3 color="blue">
	   D:</font><?php 
		    $a= $row['op4']; 
	         echo "$a";
	   ?>
	   
	   </td>
	   </tr>
	   </table>
	   <table align="center">
	   <tr>
	   <td align="right"><font size=3 color="blue">Your answer:</font>
	   <td>
	   <select name="<?php echo "$i"?>">
	   <option>A
	   <option>B
	   <option>C
	   <option>D
	   </select>
	   </td>
	   </tr>
	   </table>
       <?php
		   $i++;
}
	 ?>
	   <br><br>
	   <table align="center">
	   <tr>
	   <td><input type="submit" value="VIEW RESULT">
	   </table>
	   </td></tr>
	   </form>

	   <?php
   
   	  mysql_close($con );
  }
}

else
{
       mysql_close($con );
	   echo "You have already taken the test..";
	   ?>

       <form action="main3.php">
       <input type="submit" value="LOGOUT">
       </form>
	   <?php

}
?>
<body>
</html>