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

// send_mail($user,$share,$row['share_code']);
/*
<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "FollowStock@iti.com";
    $to = "mrmr2010_sh@yahoo.com";
    $subject = "mimi";
    $message = "hello its me";
    //$headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";
    ?> */

