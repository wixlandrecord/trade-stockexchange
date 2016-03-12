
    <?php  
    //require_once 'dbConnect.php';  
    session_start();  
        class dbFunction { 
        public static $db; 
                
            function __construct() {
                  
                // connecting to database  
                //self::$db = new dbConnect();

                 self::$db= mysqli_connect('localhost','root','','stockMarket');
                    if (!self::$db)
                    {
                        die ('Error' .mysql_connect_error());
                    }
                 
            }

            // destructor  
            function __destruct() {
                  
            }
            public function UserRegister($username, $email, $passwd){
                    $passwd = md5($passwd);
                    $qr = mysqli_query(self::$db,"INSERT INTO user(username, email, passwd) values('".$username."','".$email."','".$passwd."')") or die(mysql_error());
                    return $qr;
                   
            }
            public function Login($email, $passwd){

                // var_dump(self::$db);
                $res = mysqli_query(self::$db,"SELECT * FROM user WHERE email = '".$email."' AND passwd = '".md5($passwd)."'");
                //var_dump($res);
                $user_data = mysqli_fetch_array($res);
                var_dump($res);
                //print_r($user_data);
                $no_rows = mysqli_num_rows($res);  
                   // echo "numbers";
                  //echo $no_rows;
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
                $qr = mysqli_query(self::$db,"SELECT * FROM user WHERE email = '".$email."'");  
                echo $row = mysqli_num_rows($qr);  
                if($row > 0){  
                    return true;  
                } else {  
                    return false;  
                }  
            }  
        }  
    ?> 