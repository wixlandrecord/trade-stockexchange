<?php
    include("DB.php");
    include ("mail.php");
//fun_befor_send
    function check_to_send($share_price,$user_value,$checker_apove){
        if($checker_apove){
                            echo "<br> in function<br>";

            return $share_price>$user_value;
                          }
    return $share_price<$user_value;
}
//DB
$result = mysqli_query($link, "select * from alarm");
while($row=mysqli_fetch_assoc($result)){
            $share_alarm = mysqli_query($link, "select * from share where code=".$row['share_code']);
            echo $row['enable'];
            if($row['enable']=="true"){
                echo "inenr enable";
                echo $row['enable'];

                $share=mysqli_fetch_assoc($share_alarm);
                var_dump($share);
                echo "befor hh";
                if(check_to_send($share['price'],$row['value'],$row['checker'])){
                            $last_trigger_str = strtotime($row['last_trigger']);
                            $last_trigger_day= date("d", $last_trigger_str);
                            if($last_trigger_day!=date("d")){
                                    $result = mysqli_query($link, "select * from user where id=".$row['user_id']);
                                    $user=mysqli_fetch_assoc($result);

                                    echo $user;
                                    send_mail($user,$share,$row['share_code']);
            }
                                     mysqli_query($link, "update alarm set last_trigger ='".date('Y-m-d ', time())."'where share_code=".$row['share_code']);
        }
    }
}

//}}