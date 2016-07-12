<?php
session_start();
$_SESSION['loginmsg']="";
$_SESSION['welcomemsg']="";
header("location:login.php");
?>