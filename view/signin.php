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
            // Registration Success  
          header("location:show.php");  
        } else {  
            // Registration Failed  
            echo "<script>alert('Email / Passwd Not Match')</script>";  
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
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stock Market</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <link rel="shortcut icon" href="assets/images/gt_favicon.png">
        
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="assets/css/main.css">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logoo.png" alt="Progressus HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">

                    <li><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

                <div class="container">

                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom" id="login">
				                    <form role="form" action="" method="post" class="login-form" name="login">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username" data-icon="e">Your email</label>
				                        	<input type="email" required="required" name="email" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password" data-icon="p">Password</label>
				                        	<input type="password" required="required" name="passwd" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <input type="submit" class="btn" name="login" value="Login"/>
				                    </form>
			                    </div>
		                    </div>
		                
		                                      
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div id="register" class="form-bottom">
				                    <form role="form" action="" name="login" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">your userName</label>
				                        	<input type="text" required="required" name="username" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="email" required="required" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
				                        <div class="form-group">
                                            <label class="sr-only" for="form-password" data-icon="p">Password</label>
                                            <input type="password" required="required" name="passwd" placeholder="Password..." class="form-password form-control" id="form-password">
                                        </div>
                                         <div class="form-group">
                                            <label class="sr-only" for="form-password" data-icon="p"> confirm Password</label>
                                            <input type="password" required="required" name="confirm_passwd" placeholder="Password..." class="form-password form-control" id="form-password">
                                        </div>
				                        <input type="submit" name ="register" class="btn" value="Sign up"/>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            </div>
            
    <footer id="footer" class="top-space">



  <footer id="footer" class="top-space">
 <div class="footer2">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 widget">
            <div class="widget-body">
              <p class="simplenav">
                
              </p>
            </div>
          </div>

          <div class="col-md-6 widget">
            <div class="widget-body">
              <p class="text-right">
                Stock Marcket  
              </p>
            </div>
          </div>

        </div> <!-- /row of widgets -->
      </div>
    </div>

  </footer>  
  
        <!-- Javascript -->
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="assets/js/headroom.min.js"></script>
        <script src="assets/js/jQuery.headroom.min.js"></script>
        <script src="assets/js/template.js"></script>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>