<?php
require("DB.php");
$uid=$_POST['user_id'];
$shar=$_REQUEST['share'];
$levl=$_POST['level'];
$alrt=$_POST['alert'];

$stmt = $con->prepare("SELECT code from share where name like ?");
$stmt->bind_param("s",$shar);
$stmt->execute();
$stmt->bind_result($s_id);

while($stmt->fetch()){
    $code= $s_id;
}
$insertd=mysqli_query($link, "insert into alarm (share_code,value,user_id,checker) values ('$code', '$alrt', '$uid','$levl')");

$retrev=mysqli_query($link,"select a.id ,a.enable,a.checker,a.last_trigger,s.price, a.value,s.name from alarm a , share s where  a.user_id='$uid' and a.checker='$levl' and a.value='$alrt'and s.name='$shar'");

$output=mysqli_fetch_assoc($retrev);
$json=$output;
echo json_encode($json);