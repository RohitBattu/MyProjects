<html>
<head>
<title>
Delete qsns
</title>
</head>
<body>
<script language="JavaScript">
function fun()
{
a=f1.i1.value;
var aa=a.length;
if(aa==0)
	{
            alert("Please enter the question to be deleted" );
			return false;
}
return true;
}
</script>
<font color="blue" size=10 face="Arial Unicode MS">
<marquee> 
Welcome To JNTUH Quiz System
</marquee>
</font>
<br>
<br>
<form action="interdelete.php" method="POST" id="f1">
<table align="center">
<th colspan=2 height=100 width=200> <font color="red" size=5 face="Arial" >DELETE QUESTION</th></font>
<tr>
<td><font size=5 face="Arial"  color="green">Question to be deleted:</font>
<td><input type="text" name="qsns" id="i1">
<br>
</table>
<table align="center">
<tr>
<td><input type="submit" value="DELETE" onclick="return fun()">
</table>
</form>
<br>
<form action="main3.php">
<table align="center">
<td><input type="submit" value="LOGOUT">
</table>
</form>
</body>
</html>