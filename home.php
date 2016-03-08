<?php   
    include_once('dbFunction.php');  
    if($_POST['welcome']){  
        // remove all session variables  
        session_unset();   
  
        // destroy the session   
        session_destroy();  
    }  
    if(!($_SESSION)){  
        header("Location:index.php");  
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
        <link rel="shortcut icon" href="../favicon.ico">   
        <link rel="stylesheet" type="text/css" href="css/demo.css" />  
        <link rel="stylesheet" type="text/css" href="css/style2.css" />  
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />  
    </head>  
    <body>  
        <div class="container">  
              
              
            <header>  
                <h1>Welcome Form  </h1>  
            </header>  
            <section>               
                <div id="container_demo" >  
                     
                    <a class="hiddenanchor" id="toregister"></a>  
                    <a class="hiddenanchor" id="tologin"></a>  
                    <div id="wrapper">  
                        <div id="login" class="animate form">  
                           <form name="login" method="post" action="">  
                                <h1>Welcome </h1>   
                                <p>   
                                    <label for="emailid" class="uname"   > Your Name </label>  
                                   <?=$_SESSION['username']?>  
                  
                                </p>  
                                <p>   
                                    <label for="email" class="youpasswd"  > Your Email </label>  
                                    <?=$_SESSION['email']?>  
                                </p>  
                                   
                                <p class="login button">   
                                    <input type="submit" name="welcome" value="Logout" />   
                                </p>  
                                   
                            </form>  
                        </div>  
  
                          
                    </div>  
                </div>    
            </section>  
        </div>  
   