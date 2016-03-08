
    <?php  
    require_once 'dbConnect.php';  
    session_start();  
        class dbFunction {  
                
            function __construct() {  
                  
                // connecting to database  
                $db = new dbConnect();;  
                   
            }  
            // destructor  
            function __destruct() {  
                  
            }  
            public function UserRegister($username, $email, $passwd){  
                    $passwd = md5($passwd);  
                    $qr = mysql_query("INSERT INTO user(username, email, passwd) values('".$username."','".$email."','".$passwd."')") or die(mysql_error());  
                    return $qr;  
                   
            }  
            public function Login($email, $passwd){  
                $res = mysql_query("SELECT * FROM user WHERE email = '".$email."' AND passwd = '".md5($passwd)."'");  
                $user_data = mysql_fetch_array($res);  
                //print_r($user_data);  
                $no_rows = mysql_num_rows($res);  
                  
                if ($no_rows == 1)   
                {  
               
                    $_SESSION['login'] = true;  
                    $_SESSION['uid'] = $user_data['id'];  
                    $_SESSION['username'] = $user_data['username'];  
                    $_SESSION['email'] = $user_data['email'];  
                    return TRUE;  
                }  
                else  
                {  
                    return FALSE;  
                }  
                   
                       
            }  
            public function isUserExist($email){  
                $qr = mysql_query("SELECT * FROM user WHERE email = '".$email."'");  
                echo $row = mysql_num_rows($qr);  
                if($row > 0){  
                    return true;  
                } else {  
                    return false;  
                }  
            }  
        }  
    ?> 