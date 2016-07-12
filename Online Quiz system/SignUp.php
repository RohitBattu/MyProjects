<html>
<title>
Login Page
</title>
<body>

<marquee> 
<font color="blue" size=10 face="Arial Unicode MS">
Welcome To JNTUH Quiz System
</font>
</marquee>
<br><br><br>
<?php
$name=$_POST['name'];
$pass=$_POST['pass'];
$type=$_POST['as'];
$flag = 'rohit';
$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );
$sqlst="SELECT username,pass from $type";
$result=mysql_query($sqlst,$con );

while($rows=mysql_fetch_array($result ))
{
     if(strtoupper($rows['username'])== strtoupper($name) && strtoupper($rows['pass'])==strtoupper($pass) )
	{
	    $flag='1';
        break;
	 }
 }

if($flag=='1' && $type=="STUDENT" )
{
   	$st="SELECT * FROM STUDENT WHERE username='$name' ";
    $res=mysql_query($st,$con );
    $row=mysql_fetch_array($res );
	 $a=$row['firstname'];
	 $b=$row['lastname'];
	 $c=$row['gender'];
	 $d=$row['branch'];
	 $e=$row['contact'];
	 $f=$row['email'];
	 $g=$row['username'];
     $h=$row['pass'];
     $i=$row['flag'];

	$st= " INSERT INTO `current`(`firstname`, `lastname`, `gender`, `branch`, `contact`, `email`, `username`, `pass`,`flag`) VALUES  ('$a','$b','$c','$d','$e','$f','$g','$h',$i )" ; 
	
	if(mysql_query($st,$con ))
    {
	     ?>
    <form action="inter.php" method="POST">
	<table align="center">
	 <tr>
	 <td><font size=5 face="Arial">WELCOME</font> 
	 <td><?php  echo "$name"?> 
	 <tr>
	 <tr>
	 <td><font size=5 face="Arial">Choose your prefered task</font>
	 <td><select name="sel">
	 <option>VIEW RESULT
	 <option>TAKE EXAM
	 </select>
	 <tr>
	 <td>
	 <td><input type="Submit" value="SUBMIT"/>
	 </table>
     </form>
	 <br>
	 <br><br>
	 <form action="main3.php" method="POST">
	 <table align="center">
	 <tr>
	 <td><input type="submit" value="LOGOUT">
	 </table>
	 </form>
		 <?php
	
	 }

}
	  
else if($flag==1 && $type="FACULTY" )
{
  	$st="SELECT * FROM faculty WHERE username='$name' ";
    $res=mysql_query($st,$con );
    $row=mysql_fetch_array($res );
	 $a=$row['firstname'];
	 $b=$row['lastname'];
	 $c=$row['gender'];
     $d=$row['branch'];
	 $e=$row['contact'];
	 $f=$row['email'];
	 $g=$row['username'];
     $h=$row['pass'];


	$st= " INSERT INTO `current`(`firstname`, `lastname`, `gender`, `branch`, `contact`, `email`, `username`, `pass`) VALUES  ('$a','$b','$c','$d','$e','$f','$g','$h' )" ; 
	 
	 if(mysql_query($st,$con ))
	{
	     ?>
		 <form action="interr.php" method="POST">
	<table align="center">
	 <tr>
	 <td><font size=5 face="Arial">WELCOME</font> 
	 <td><?php  echo "$name"?> 
	 <tr>
	 <tr>
	 <td><font size=5 face="Arial">Choose your prefered task</font>
	 <td><select name="sel">
	 <option>VIEW STUDENT PERFORMANCE
	 <option>ENTER QUESTIONS
	 <option>DELETE QUESTIONS
	 <option>RESET THE FLAGS
	 </select>
	 <tr>
	 <td>
	 <td><input type="Submit" value="SUBMIT"/>
	 </table>
     </form>
	 <br>
	 <br><br>
	 <form action="main3.php" method="POST">
	 <table align="center">
	 <tr>
	 <td><input type="submit" value="LOGOUT">
	 </table>
	 </form>
	      <?php
	 }
	 
	 }

else 
header("location:main2.php" );

mysql_close($con );
?>
</body>
</html>