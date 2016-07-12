<html>
<head>
<title>
Round-1
</title>
</head>
<body background="mainpic2.jpg">
<?php


session_start();
$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );
$a=$_SESSION['contact'];

$sql="SELECT results from cycregisterations where contactno=$a";
$res=mysql_query($sql,$con);
$r=mysql_fetch_array($res);

if($r['results']==-10)
{

?>
<style type="text/css">
dt
{
  font-size:25;
}
dd
{
 font-size:20;
}
a
{
 color:green;
}
marquee
{
  font-size:35;
  color:blue;
}
</style>
<br><br>
<marquee>
Welcome to QUEST 2K16 proudly presents " Can You 'C' "
</marquee>
<br><br><br><br>


<table align=center>
<tr><td>
<dt>Rules</dt><br>
<dd>
1.Test can be taken only once<br><br>
2.The time limit would be 15 minutes for 15 questions<br><br>
3.You will receive a mail regarding the results after the completion of test<br><br>
4.Please donot refresh the page during the test<br><br>
5.All the best<br><br>
<a href="Exam.php">Click here to proceed to Exam</a>
</dd>
</td>
</tr>
</table>
<?php
}

else{
$_SESSION['welcomemsg']="You have already taken the test....";
header("location:welcome.php");}
	?>
</body>
</html>