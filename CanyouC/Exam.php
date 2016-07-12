<html lang="en">
<head>

<title>Exam</title>

<style type="text/css">
body
{
<!--background-image:url('<?php echo $url ?>');-->
   font-family:Arial Unicode MS;
}
</style>
<script language="javascript">
function over()
{
   var a=document.getElementById("end");
   a.style.backgroundColor="#5f8285";
}

function out()
{
var a=document.getElementById("end");
a.style.backgroundColor="#67dde7";
}

function fun()
{
  var a=confirm("Are ou sure you want to end the test");
  return a;
}
</script>


</head>

<body bgcolor="white">
<style type="text/css">
marquee
{
  font-size:35;
  color:blue;
}
#end {
    border-radius: 10px;
    moz-border-radius: 4px;
    webkit-border-radius: 4px;   
    height: 40px;
    width: 130px; 
    border:1px #245ec6 solid;
    font-family:Arial Unicode MS;
    font-size:23;
    background-color:#67dde7;
}

</style>

<marquee>
Welcome to Quiz
</marquee>

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

$sqlst="SELECT * FROM `cse` order by rand() limit 15 ";
$result=mysql_query($sqlst,$con );


 
              ?>
         <form action="marks.php" method="post">      
              
              <?php
              $i=1;
			  
                    while($row=mysql_fetch_array($result ))
                     {
                      	   ?>
	   <br>
	   <table align="center">
	   <tr>
	   <td>
	   <font size=5 color="red" face="Courier New">
	   Q:</font><?php 
		    $a= $row['qsn']; 
	     ?> <font size=5 color=red > <?php  echo "$a";?> </font>
	   
	   </td>
	   </tr>
	  </table>
	  <table align="center" cellspacing=10>
	  <tr>
	   <td>
	   <font size=3 color="blue" face="Courier New">
	   A:</font><?php 
		    $a= $row['op1']; 
	     ?> <font size=4 color=blue > <?php  echo "$a";?> </font>
	   
	   
	   </td>
	   <td>
	   <font size=3 color="blue" face="Courier New">
	   B:</font><?php 
		    $a= $row['op2']; 
	     ?> <font size=4 color=blue > <?php  echo "$a";?> </font>
	   
	  </td>
	  <td>
	   <font size=3 color="blue" face="Courier New">
	   C:</font><?php 
		    $a= $row['op3']; 
	     ?> <font size=4 color=blue > <?php  echo "$a";?> </font>
	   
	   </td>
	   <td>
	   <font size=3 color="blue" face="Courier New">
	   D:</font><?php 
		    $a= $row['op4']; 
	     ?> <font size=4 color=blue > <?php  echo "$a";?> </font>
	    
	   </td>
	   </tr>
	   </table>
	   <table align="center">
	   <tr>
	   <td align="right"><font size=3 color="green" face="Courier New">Your answer:</font>
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
		   $x=$i;       
	       $y=$row['ans'];
		
	                 $_SESSION["'$x'"]=$y;
		   $i++;

}
	 ?>

  <table align="center">
  <tr>
  <td><input type=submit value="end exam" id="end" onclick="return fun()" onmouseover="over()" onmouseout="out()"/>
  </td>
  </tr>
  </table>
</form>
<?php

}

else{
$_SESSION['welcomemsg']="You have already taken the test....";
header("location:welcome.php");}
?>
</font>
</body>
</html>