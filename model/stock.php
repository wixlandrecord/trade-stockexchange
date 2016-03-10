<?php

require_once('class.stockMarketAPI.php'); 
include_once 'DB.php';
 

$StockMarketAPI = new StockMarketAPI();

$StockMarketAPI->symbol = array('AAPL', 'MSFT', 'GOOGL','SYMC','HPE','PBR','HRB','SDRL','NADL','WLL');

$symbol_array = $StockMarketAPI->getData();

/*print_r($symbol_array);
*/
$AAPL_Price=$symbol_array['AAPL']['price'];
$SYMC_Price =$symbol_array['SYMC']['price'];
$MSFT_price =$symbol_array['MSFT']['price'];
$HPE_price=$symbol_array['HPE']['price'];
$PBR_price=$symbol_array['PBR']['price'];
$HRB_price=$symbol_array['HRB']['price'];
$GOOGL_price=$symbol_array['GOOGL']['price'];
$SDRL_price=$symbol_array['SDRL']['price'];
$NADL_price=$symbol_array['NADL']['price'];
$WLL_price=$symbol_array['WLL']['price'];

$query=mysqli_query($link,"update share set price ='$AAPL_Price' where name='AAPL'");
$query=mysqli_query($link,"update share set price ='$SYMC_Price' where name='SYMC'");
$query=mysqli_query($link,"update share set price ='$MSFT_price' where name='MSFT'");
$query=mysqli_query($link,"update share set price ='$HPE_price' where name='HPE'");
$query=mysqli_query($link,"update share set price ='$PBR_price' where name='PBR'");
$query=mysqli_query($link,"update share set price ='$HRB_price' where name='HRB'");
$query=mysqli_query($link,"update share set price ='$SDRL_price' where name='SDRL'");
$query=mysqli_query($link,"update share set price ='$NADL_price' where name='NADL'");
$query=mysqli_query($link,"update share set price ='$WLL_price' where name='WLL'");
$query=mysqli_query($link,"update share set price ='$GOOGL_price' where name='GOOGL'");















 
