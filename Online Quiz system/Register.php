<html>
<title>
Registeration
</title>
<body>
<script language="JavaScript">
function fun()
{
a=f1.i1.value;
b=f1.i2.value;
e=f1.i5.value;
f=f1.i6.value;

if(a.length==0 || b.length==0 || e.length==0 || f.length==0)
	{
        alert("Please enter all the details in the fields denoted by * mark" );
		return false;
}
if(ff<8)
	{
alert("Password must be atleast 8 characters long" );
return false;
}
return true;
}
</script>
<font color="blue" font size=10 face="Arial Unicode MS">
<marquee> 
Welcome To JNTUH Quiz System
</marquee>
</font>
<br>
<br>
<form action="Register2.php" method="POST" id="f1">
<table align="center">
<th colspan=2 height=100 width=200> <font color="green" size=5 face="Arial" >Register</th></font>
<tr>
<td><font size=5 face="Arial"  color="green">Register as:</font>
<td><select name="as"><option>STUDENT<option>FACULTY</select>
<tr>
<td><font color="green" size=5 face="Arial" >ID(if faculty ):</font>
<td><input type="text" name="idff"/>
<tr>
<td><font color="green" size=5 face="Arial" >First Name*:</font>
<td><input type="text" name="fname" id="i1"/>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Last Name*:</font>
<td><input type="text" name="lname" id="i2">
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Gender:</font>
<td>
<select name="g">
<option>MALE
<option>FEMALE
</select>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Branch:</font>
<td>
<select name="bran">
<option>CSE
<option>ECE
<option>MECHANICAL
<option>CIVIL
</select>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Contact No:</font>
<td><input type="text" name="no" />
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Email id:</font>
<td><input type="text" name="email"/>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >UserName*:</font>
<td><input type="text" name="un" id="i5"/>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Password*:</font>
<td><input type="password" name="pass" id="i6"/>
<tr>
<tr>
<td>
<td><input type="submit" value = "Register" onclick="return fun()"/>
</table>
</form>
</body>
</html>