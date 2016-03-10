
    <?php  
        class dbConnect {  
            function __construct() {  
                require_once('config.php');  
                /*$conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);  
                mysql_select_db(DB_DATABSE, $conn);  
                if(!$conn)// testing the connection  
                {  
                    die ("Cannot connect to the database");  
                }   */

                    $link= mysqli_connect($config['server'],
                            $config['username'],
                            $config['password'],
                            $config['database']
                            );
                    if (!$link)
                    {
                        die ('Error' .mysql_connect_error());
                    }
                return $link;  
            } 

             public function connection(){
                return $link;
            }  
            public function Close(){  
                mysql_close();  
            }  
        }  
    ?>  