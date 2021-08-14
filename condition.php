<?php
 $sql = "select top 1 * from dbo.Monitoring ORDER BY id desc";
 $stmt = $connection->query($sql);   

 $row = $stmt->fetch(PDO::FETCH_ASSOC);

 if($row['server'] != 'ON'){
     $server = 'red';
 }else{
    $server = 'green';
 }
 if($row['db_server'] != 'ON'){
    $db = 'red';
}else{
   $db = 'green';
}
if($row['wim_lane1'] != 'ON'){
    $wim1 = 'red';
}else{
   $wim1 = 'green';
}
if($row['wim_lane2'] != 'ON'){
    $wim2 = 'red';
}else{
   $wim2 = 'green';
}
if($row['ras1'] != 'ON'){
    $ras1 = 'red';
}else{
   $ras1 = 'green';
}
if($row['ras2'] != 'ON'){
    $ras2 = 'red';
}else{
   $ras2 = 'green';
}
if($row['over1'] != 'ON'){
    $over1 = 'red';
}else{
   $over1 = 'green';
}
if($row['over2'] != 'ON'){
    $over2 = 'red';
}else{
   $over2 = 'green';
}
if($row['lpr1'] != 'ON'){
    $lpr1 = 'red';
}else{
   $lpr1 = 'green';
}
if($row['lpr2'] != 'ON'){
    $lpr2 = 'red';
}else{
   $lpr2 = 'green';
}
if($row['relay1'] != 'ON'){
    $relay1 = 'red';
    $display1 = 'display:none';
}else{
   $relay1 = 'green';
   $display1 = null;
}
if($row['relay2'] != 'ON'){
    $relay2 = 'red';
    $display2 = 'display:none';
}else{
   $relay2 = 'green';
   $display2 = null;
}
if($row['relay3'] != 'ON'){
   $relay3 = 'red';
   $display3 = 'display:none';
}else{
  $relay3 = 'green';
  $display3 = null;
}

?>