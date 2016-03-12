<?php
//create random text
function randomize($length = 6) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
    return $randomString;
    }


    //sign up test
    $curl_connection = curl_init("http://localhost/php_proj/view/index.php");
    curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
    
    //set data to be posted
    //email array
    $email=array('borsauser1@gmail.com','borsauser2@gmail.com','borsauser3@gmail.com','borsauser3@gmail.com' ,'borsauser5@gmail.com','borsauser6@gmail.com');//'borsauser7@yahoo.com',//'borsauser8@yahoo.com');


 foreach($email as $e => $em){   
      //$i=md5(rand());
        $i="123";
        echo "password".$i;//password
      
      $username= randomize();//username
      
      $post_string="username=$username&passwd=$i&confirm_passwd=$i&email=$em&register=$i";
      
    //$params[] = array("username" => $username,"email" => $em,"password" =>$i);
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
 
	   //perform our request
	   $result = curl_exec($curl_connection);
 
	   }
           //close connection
	   curl_close($curl_connection);
    // var_dump($params);
    ?>