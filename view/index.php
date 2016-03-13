<?php  
    include_once('dbFunction.php');     
    $funObj = new dbFunction();  
    if(isset($_POST['login'])){  
        $email = $_POST['email'];  
        $passwd = $_POST['passwd'];  
        $user = $funObj->Login($email, $passwd); 
        echo "opalallaaaa"; 
        echo $user;
        if ($user) {  
            
          header("location:show.php");  // Registration Success 
        } else {  
            echo "<script>alert('Email / Passwd Not Match')</script>";  // Registration Failed  
        }  
    }  
    if(isset($_POST['register'])){  
        $username = $_POST['username'];  
        $email = $_POST['email'];  
        $passwd = $_POST['passwd'];  
        $confirmPasswd = $_POST['confirm_passwd'];  
        if($passwd == $confirmPasswd){  
            $email1 = $funObj->isUserExist($email);  
            if(!$email1){  
                $register = $funObj->UserRegister($username, $email, $passwd);  
                if($register){  
                     echo "<script>alert('Registration Successful')</script>";  
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }  
        } else {  
            echo "<script>alert('Password Not Match')</script>";  
          
        }  
    }  
?>  
<!DOCTYPE html>  
 <html lang="en" class="no-js">  
 <head>  
        <meta charset="UTF-8" />  
        <title>Login and Registration Form with HTML5 and CSS3</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />  
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />  
        <meta name="author" content="Codrops" />  
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="../favicon.ico">   
        <link rel="stylesheet" type="text/css" href="css/demo.css" />  
        <link rel="stylesheet" type="text/css" href="css/style2.css" />  
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />  
        
    </head>  
    <body>  
     <div class="container">  
              
              
            <header>  
                <h1>Login and Registration Form  </h1>  
            </header>  
            <section>               
                <div id="container_demo" >  
                     
                    <a class="hiddenanchor" id="toregister"></a>  
                    <a class="hiddenanchor" id="tologin"></a>  
                    <div id="wrapper">  
                        <div id="login" class="animate form">  
                           <form name="login" method="post" action="">  
                                <h1>Log in</h1>   
                                <p>    
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>  
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/>   
                                </p>  
                                <p>   
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>  
                                    <input id="password" name="passwd" required="required" type="password" placeholder="eg. X8df!90EO" />   
                                </p>  
                                <p class="keeplogin">   
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />   
                                    <label for="loginkeeping">Keep me logged in</label>  
                                </p>  
                                <p class="login button">   
                                    <input type="submit" name="login" value="Login" />   
                                </p>  
                                <p class="change_link">  
                                    Not a member yet ?  
                                    <a href="#toregister" class="to_register">Join us</a>  
                                </p>  
                            </form>  
                        </div>  
  
                        <div id="register" class="animate form">  
                            <form name="login" method="post" action="">  
                                <h1> Sign up </h1>   
                                <p>   
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>  
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />  
                                </p>  
                                <p>   
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>  
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/>   
                                </p>  
                                <p>   
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>  
                                    <input id="passwordsignup" name="passwd" required="required" type="password" placeholder="eg. X8df!90EO"/>  
                                </p>  
                                <p>   
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>  
                                    <input id="passwordsignup_confirm" name="confirm_passwd" required="required" type="password" placeholder="eg. X8df!90EO"/>  
                                </p>  
                                <p class="signin button">   
                                    <input type="submit" name="register" value="Sign up"/>   
                                </p>  
                                <p class="change_link">    
                                    Already a member ?  
                                    <a href="#tologin" class="to_register"> Go and log in </a>  
                                </p>  
                            </form>  
                        </div>  
                          
                    </div>  
                </div>    
            </section>  
        </div> 
         <script src="bootstrap/js/bootstrap.min.js"></script> 
    </body>  
</html