<?php
require("DB.php");
$enable1=$_POST['enable'];
$id1=$_POST['id'];
echo $enable1;
echo $id1;
mysqli_query($link, "update alarm set enable='$enable1' where id='$id1'");

