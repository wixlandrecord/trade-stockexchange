<!DOCTYPE html>
<html>
	    <head>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	 <title>Stock Market</title>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body class="home">
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
                <li><a class="btn" href="show.php">My Alarms</a></li>
                    <li><a class="btn" href="index.html">Log Out</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
<?php
require("../model/DB.php");
include_once('dbFunction.php');
$user=$_SESSION['uid'];
echo "<input id='user' type=hidden value='$user'>" ;
echo '<div class="form-horizontal">';
echo '<div class="container-fluid">
<div style="height:50px";></div>';
	echo '<form class="form-horizontal">';
 $result=mysqli_query($link, "select * from user where id='$user' ");       
        while($row = mysqli_fetch_assoc($result))
            {
              $data[]=$row;             
             }
             foreach($data as $i => $row)
              {
                echo('	<br><br><br><br><br>
                	<div class="form-group">
		<label class="control-label" >Username:</label>
		<div class="input-group col-md-5">

			<input class="form-control" id="fn" name="fname" style="height: 50px;"type="text" value='.$row['username'].'>
		</div>
	</div><br> ');


	echo'<div class="form-group">
		<label class="control-label" >email:</label>
		<div class="input-group col-md-5">

			<input class="form-control" id="em" style="height: 50px;" name="email" type="text" value='.$row['email'].'>
		</div>
	</div><br>';
		echo'<div class="form-group">
		<label class="control-label" >password:</label>
		<div class="input-group col-md-5">

			<input class="form-control" id="pas" name="password" type="password" style="height: 50px;">';



echo '<br><br><br> <br>
<button type="submit" class="btn btn-primary" id="up">update</button>
</form>
	</div> </div>';
			 }
?>

</div>
</div>


  <footer id="footer" class="top-space">
 <div class="footer2">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 widget">
            <div class="widget-body">
              <p class="simplenav">
                
                <b><a href="index.html">log Out</a></b>
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
	<script src="jquery-1.12.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="update.js"></script>
	        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="assets/js/headroom.min.js"></script>
        <script src="assets/js/jQuery.headroom.min.js"></script>
        <script src="assets/js/template.js"></script>
</body>
</html>