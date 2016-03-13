<html>
    <head>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                <li><a class="btn" href="update.php">update My Profil</a></li>
                    <li><a class="btn" href="signin.php">Log Out</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
<?php 
    require("../model/DB.php");
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
     
     $user=$_SESSION['uid'];
     echo $user;
     //echo" <input type='submit' name='welcome' action='signin.php'  value='Logout' /> ";
     //echo "<input id='user' type=hidden value='$user'>" ;
      echo '<div class="form-horizontal">';
     echo'<div class="container"><div style="height: 50px;"></div>';
     echo'<div class="table-responsive">';
     echo(' <table class="table table-bordered table-hover table-responsive" id="tab" >');
                echo('<tr>');
                 echo('<th> </th>');
                 echo('<th>Enable/Disable Alarm </th>');
                 echo('<th> share</th>');
                 echo('<th> price</th>');
                 echo('<th> alarm</th>');
                 echo('<th> last_trigger</th>');
                 echo('<th>Delete alarm</th>');
                 echo('</tr>');
        $result=mysqli_query($link, "SELECT s.name , s.price , a.value, a.id, a.user_id,a.checker, a.last_trigger , a.enable  from share s , alarm a  where s.code=a.share_code and user_id='$user';");
        while($row = mysqli_fetch_assoc($result))
            {
              $data[]=$row;             
             } 
        if ( isset($data)){
             foreach($data as $i => $row)
              {
                echo('<tr class="tr">
                  <td  class="Id" >
                     '.$row['id'].'');
                 echo(' </td><td id="col2">');
                      if($row['enable']==='true'){
                     echo('<div class="input-group">                        
                                 <input type="checkbox" checked class="text-center chek">
                         </div>');
                      }
                      else if($row['enable']==='false'){
                     echo(' <div class="input-group">                        
                                 <input type="checkbox" class="chek" unchecked>
                           </div>');
                      }
                 echo(' </td>
                  <td id="col3" class="info text-info">
                     '.$row['name'].'
                  </td>
                  <td id="col4" class="info text-info">
                     '.$row['price'].'
                  </td>
                  <td id="col5" class="info text-info">
                     '.$row['checker']." ".$row['value'].'
                   </td>
                    <td id="col6" class="info text-info">
                     '.$row['last_trigger'].'
                     </td>
                  <td id="col7" class="info text-info">
                     <input type="button"  value="delete"  class=" btn btn-danger del" >
                  </td>
              </tr>'); 
                           
              }

        while($row = mysqli_fetch_assoc($result))
            {
              $data[]=$row;             
             }
          //   foreach($data as $i => $row)   
        echo('</table>');
        echo'</div>';
        echo '</div>';
        }

        echo '</div>';
    echo(' <table class="table">');
    
    //////////////////// ADD Alarm ////////////////////
    echo'<tr><td><select  name="alarm" id="sell">    
      <br><br><option>............select share.......</option>';
    $select=mysqli_query($link, "SELECT name from share ");
    $row1=[];
    while($output=mysqli_fetch_assoc($select)){
        $row1[]=$output;}
        foreach($row1 as $i => $col){
        echo"<option >".$col['name']."</option>";
    }
   echo' </select></td></td><td></tr>
       
   <tr><td><div class="control-group">
     <div class="controls">
         <div class="radio">
             <label>
                 <input name="level" type="radio" value="below">
                   Drops Below
              </label>
          </div>
      </div> 
</div>
<div class="control-group ">
           <div class="controls">
               <div class="radio">
                   <label>
                        <input  name="level" type="radio" value="above">
                         Goes Above
                    </label>
                </div>
          </div>
       </div></td>
       <td><input class="form-control tx " style="height: 25px;" name="value" type="number" min=1 />
         <input type="button" value="Add Alarm" class="btn btn-info" id="btn">
         </td></tr>
    </table></div>';  
   
?>
            </div>
            </div>

  <!-- /Intro-->
    



  <footer id="footer" class="top-space">
 <div class="footer2">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 widget">
            <div class="widget-body">
              <p class="simplenav">
                
                <b><a href="signin.php">log Out</a></b>
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
<script src="table.js"></script>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="assets/js/headroom.min.js"></script>
        <script src="assets/js/jQuery.headroom.min.js"></script>
        <script src="assets/js/template.js"></script>
  <style>                        
    td,th{
        vertical-align: middle !important;
        text-align: center !important;
    }
</style>

</body>
</html>