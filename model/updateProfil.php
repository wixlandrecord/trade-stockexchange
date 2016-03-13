<?php
require("DB.php");
$user=$_REQUEST['user'];
$usernam=$_REQUEST['username'];
$ema=$_REQUEST['emal'];
$pasw=$_REQUEST['pass'];
$gendr=$_REQUEST['gend'];
$updat=mysqli_query($link, "update user set username='$usernam',email='$ema',passwd='".md5($pasw)."' where id ='$user' ");
