<?php
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['g'];
$d=$_POST['bran'];
$e=$_POST['email'];
$f=$_POST['no'];
$g=$_POST['un'];
$h=$_POST['pass'];
$j=$_POST['idff'];
$k=$_POST['as'];
$i="rohit";
$con=mysql_connect("localhost","root","","");
mysql_select_db("mysql" );
$sql="SELECT username from $k where username = '$g' ";
$result=mysql_query($sql,$con );
while($row=mysql_fetch_array($result ))
{
     $x = strtoupper($g );
     $y = strtoupper($row['username'] );
      if($x==$y )
      {        $i = "battu";
                  break;
   }
 }
if($j=="1234" && $k=="FACULTY"  )
{
          if($i == "rohit")
        {
           $sqlst="INSERT INTO $k(`firstname`, `lastname`, `gender`, `branch`, `contact`, `email`, `username`, `pass`) VALUES ('$a','$b','$c','$d','$f','$e','$g','$h')";
          if(mysql_query($sqlst,$con ))
          header ("location:main4.php" );
          }
         else
         header("location: Registerr.php"); 
}

else if($j!="1234" && $k=="FACULTY" )
{
          header("location:Register3.php" );
}

if($k=="STUDENT" )
{
       if($i == "rohit")
        {
           $sqlst="INSERT INTO faculty(`firstname`, `lastname`, `gender`, `branch`, `contact`, `email`, `username`, `pass`, `flag`) VALUES ('$a','$b','$c','$d','$f','$e','$g','$h',0)";
          if(mysql_query($sqlst,$con ))
          header ("location:main4.php" );
          }
         else
         header("location: Registerr.php"); 
}
mysql_close($con );

?>