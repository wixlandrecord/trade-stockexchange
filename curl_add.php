<?php
    $curl_connection = curl_init("http://localhost/php_proj/view/index.php");
    curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
    
    //set data to be posted
    //email array
    $email=array('borsauser1@gmail.com','borsauser2@gmail.com','borsauser3@gmail.com','borsauser3@gmail.com' ,'borsauser5@gmail.com','borsauser6@gmail.com');//'borsauser7@yahoo.com',//'borsauser8@yahoo.com');


 foreach($email as $e => $em){   
      //$i=md5(rand());
        $i=123;
      //  echo "password".$i;//password
      
        $post_string="&email=$em&passwd=$i&login=$$i";
      
    //$params[] = array("email" => $em,"passwd" =>$i,"login"=>$em);
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
   // curl_setopt($curl_connection,   CURLOPT_POSTFI , $params);
    //perform our request
	$result = curl_exec($curl_connection);
 
	   }
           //close connection
	   curl_close($curl_connection);
    ?>