<?php
function send_mail($user,$share,$share_code){
    $to = $user['email'];
    $subject = "FollowStock";
    $message = ".
    echo "   .$share['name'].",
    echo "    . $share['price']." ,
    echo ".date('Y-m-d h:i:s', time())." .";
    $headers="Follow Your Share ITI  ";
    mail($to,$subject,$message,$headers);
    //echo "Test email sent";

}
