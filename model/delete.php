<?php
require("../model/DB.php");
$aid=$_POST['id'];
$result=mysqli_query($link,"delete from alarm where id='$aid'");
?>
