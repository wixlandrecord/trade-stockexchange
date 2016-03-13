<?php   
    include_once('dbFunction.php');  
    if(isset($_POST['welcome'])){  
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
 <html>  
 <head>  
        <title>Stock Market</title> 
    </head>  
    <body>      
            <header>  
                <h1>Welcome</h1>  
            </header>   
                           <form method="post" action="">   
                                <p>   
                                    <label> Your Name </label>  
                                   <?=$_SESSION['username']?>  
                  
                                </p>  
                                <p>   
                                    <label> Your Email </label>  
                                    <?=$_SESSION['email']?>  
                                </p>  
                                 <p>   
                                    <label> Your id </label>  
                                    <?=$_SESSION['uid']?>  
                                </p> 
                                   
                                <p>   
                                    <input type="submit" name="welcome" value="Logout" />   
                                </p>  
                                   
                            </form>     