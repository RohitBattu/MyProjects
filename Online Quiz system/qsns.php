<html>
<title>
Questions
</title>
<body>
<script language="JavaScript">
function fun()
{
a=f1.i1.value;
b=f1.i2.value;
e=f1.i3.value;
f=f1.i4.value;
g=f1.i5.value;
if(a.length==0 || b.length==0 || e.length==0 || f.length==0 || g.length==0 )
	{
        alert("Please enter all the details in the fields" );
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
<br><br><br><br><br><br>
</table>
<form action="Enterqsns.php" method="POST" id="f1">
<table align="center">
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Enter Question</font>
<td><input type="text" name="qsn" id="i1"/>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Enter Option1</font>
<td><input type="text" name="o1" id="i2"/>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Enter Option2</font>
<td><input type="text" name="o2" id="i3"/>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Enter Option3</font>
<td><input type="text" name="o3" id="i4"/>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Enter Option4</font>
<td><input type="text" name="o4" id="i5"/>
<tr>
<tr>
<td><font color="green" size=5 face="Arial" >Enter Answer</font>
<td><select name="ans">
<option>A
<option>B
<option>C
<option>D
</select>
<tr>
<tr>
<td><td><input type="submit" value ="Submit" onclick="return fun()"/>
</table>
</form>
<form action="main3.php" method="POST">
<table align="center">
<tr>
<td><input type="submit" value="LOGOUT">
</table>
</form>
</body>
</html>