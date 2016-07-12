<html>
<title>
Online Quiz
</title>
<body  background= "C:\MY THINGS\pics\back.jpg"  color=red >

<script language="JavaScript">
function fun()
{
a=f1.i1.value;
b=f1.i2.value;
var aa=a.length;
var bb=b.length;

if(aa<=0 && bb>0 )
	{alert("Enter valid username" ); return false; }
else if(aa>0 && bb<=0 )
	{	alert("Enter valid password" ); return false; }
else if(aa<=0 &&bb<=0 )
	{alert("Enter username and password" ); return false; }
return true;
}
</script>

<br>
<b>
<font color="blue" size=10 face="Arial Unicode MS">
<marquee> 
Welcome To JNTUH Quiz System
</marquee>
</font>
<table align="center">
<tr>
<td><font color="black" size=4 face="Arial Unicode MS">The username and password combination is invalid...Please re-enter them</font>
</table>
</b>
<br>

<form action="SignUp.php" method="POST" id="f1">
<table align="center">
<i>
<tr>
<th colspan="2"><font size=6 face="Arial"  color="black">LOGIN</th>
<tr>
<td><font size=5 face="Arial"  color="green">Login as:</font>
<td><select name="as"><option>STUDENT<option>FACULTY</select>
<tr>
<td><font size=5 face="Arial"  color="green">User Name:</font>
<td><input type="text" name="name" id="i1" />
<tr>
<td><font size=5 face="Arial"  color="green">Password:</font>
<td><input type="password" name="pass" id="i2" />
<tr>
<td>&nbsp;<td><input type="Submit" value="Sign In" onclick="return fun()"/>
</i>
</table>
</form>

<br>
<br>
<ul>
<i>
<font color="red" font size=5 face="Arial Unicode MS">
<li>New to this website..try out help to know about the features --<a href="help.php" >HELP</a>
<li>Register to form a part of this site --<a href="Register.php">REGISTER</a>
</i>
</font>
</ul>

</body>
</html>