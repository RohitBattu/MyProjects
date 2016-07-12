<html lang="en">
<head>
<script language="javascript">
function fun()
{
  var a = f1.t1.value;
  var b = f1.t2.value;
  if(a.length==0||b.length==0)
	{
	  alert("Please enter the details");
	  return false;
	}  
  return true; 
}
</script>
<title>Exam</title>

<style type="text/css">
body
{
   background-image:url('mainpic2.jpg');
   font-family:Arial Unicode MS;
}
td
{
  font-size:20; 
}
th
{
  font-size:25; 
}

marquee
{
  font-size:35;
  color:blue;
}
</style>

</head>

<body>
<marquee>
Welcome to QUEST 2K16 proudly presents " Can You 'C' "
</marquee>

<br><br><br>
<?php
session_start();
$_SESSION['welcomemsg']="";
$a=$_SESSION['loginmsg'];

	?>
 <font size=4>
 <h3 align=center>
<?php
echo "$a";
?>
</font></h3>

<form action="validate.php" method="post" id="f1">
<table align=center>
<th colspan=2>
Login
</th>
<tr>
<td>Contact.no:
</td>
<td><input type="number" name="contact" id="t1" />
</td>
</tr>

<tr>
<td>Password:
</td>
<td><input type="password" name="password" id="t2" />
</td>
</tr>

<tr>
<td>&nbsp
</td>
<td><input type="submit" value="Login" onclick="return fun()"/>
</td>
</table>
</form>

</body>

</html>