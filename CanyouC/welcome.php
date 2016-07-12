<html>
<head>
<title>
Welcome-Can you 'C'
</title>
<script language="javascript">
function over()
{
   var a=document.getElementById("join");
   a.style.backgroundColor="#5f8285";
}

function out()
{
var a=document.getElementById("join");
a.style.backgroundColor="#67dde7";
}
function overlog()
{
   var a=document.getElementById("logout");
   a.style.backgroundColor="#5f8285";
}

function outlog()
{
var a=document.getElementById("logout");
a.style.backgroundColor="#67dde7";
}

</script>
</head>
<body background="mainpic2.jpg">
<style type="text/css">
#exam
{
 width: 20em;  height: 5em;
 

}

#join {
    border-radius: 10px;
    moz-border-radius: 4px;
    webkit-border-radius: 4px;   
    height: 100px;
    width: 500px; 
    border:1px #245ec6 solid;
    font-family:Arial Unicode MS;
    font-size:23;
    background-color:#67dde7;
}
#logout {
    border-radius: 10px;
    moz-border-radius: 4px;
    webkit-border-radius: 4px;   
    height: 35px;
    width: 200px; 
    border:1px #245ec6 solid;
    font-family:Arial Unicode MS;
    font-size:23;
    background-color:#67dde7;
}


dt
{
  font-size:20;
}
dd
{
  font-size:20;
}
a
{
  font-size:20;
  color:red;
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

<?php
session_start();

$a=$_SESSION['welcomemsg'];

	?>
 <font size=4>
 <h3 align=center>
<?php
echo "$a";
?>
</font></h3>

<table align=right>
<tr>
<td>
<form action="intro.html" method="post">
<button class="button" id="logout" onmouseover="overlog()" onmouseout="outlog()" >Logout</button>
</form>
</td>
</tr>
</table>
<table align=center>
<tr>
<td>
<dt>Round-1</dt>
<dd>Online Multiple choice questions</dd>
<br>
<dt>Round-2</dt>
<dd>Would be conducted on the 1st day of the fest i.e. March 18th </dd>
<br>
<dt>Round-3</dt>
<dd>Would be conducted on the 2nd day of the fest i.e. March 19th</dd>
</td>
</tr>
<tr>
<td>&nbsp</td>
</tr>

<tr>
<td>
<form action="exam.php" method="post">
<button class="button" id="join" onmouseover="over()" onmouseout="out()" >Click here to take exam</button>
</form>
</td>
</table>






<body>
</html>