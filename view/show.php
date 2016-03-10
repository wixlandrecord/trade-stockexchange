<html>
    <head>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<?php 
     require("../model/DB.php");
     $user=1;
     echo "<input id='user' type=hidden value='$user'>" ;
     echo'<div class="container"><div style="height: 50px;"></div>';
     echo(' <table class="table  table-bordered table-hover" id="tab" >');
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
             foreach($data as $i => $row)   
    echo('</table>');
        }
        
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
       <td><input class="form-control tx " style="height: 25px;" name="value" type="number" minimum=0 />
         <input type="button" value="Add Alarm" class="btn btn-info" id="btn">
         </td></tr>
    </table>';  
   
?>

<script src="jquery-1.12.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="table.js"></script>
  <style>                        
    td,th{
        vertical-align: middle !important;
        text-align: center !important;
</style>

</body>
</html>