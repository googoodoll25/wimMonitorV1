<?php
$ip = "49.229.158.23";
try{
    $exe= shell_exec("ping -n 2 $ip");
}catch (Exception $e){
    echo $e->getMessage();
}
if(strrpos($exe, "100% loss") > 0){
    echo '
    <div class="card">     
           <div class="card-body">
           <div class="row">
                   <div class="col-md-12">
            <!--========================================================-->
            <small>VWS</small> เพชรบูรณ์ (ขาออก) <code><b>INTERNET OFFLINE</b></code>
                   </div>
                   
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">

                       
                       <table class="table table-sm  table-bordered ">
                           <thead>
                               <tr>
                                   <th>Data1</th>
                                   <th>Data2</th>
                                   <th>Server1</th>
                                  
                                   <th>WIM1</th>
                                   <th>WIM2</th>
                                   <th>Loop1</th>
                                   <th>Loop2</th>
                                   <th>Over1</th>
                                   <th>Over2</th>
                                   <th>LPR1</th>
                                   <th>LPR2</th>
                                   <th>Relay1</th>
                                   <th>Relay2</th>
                                   <th>Relay3</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>
                                   <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                  
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                   
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    ';
}else{
    //===========================================================================
    try{
        $serverName = '49.229.158.23';
        $dbName     = 'db_wim';
        $userName       = 'mettler';
        $userPassword   = 'p@ssw0rd';
        $connection     = new

        PDO("sqlsrv:server=$serverName ; Database = $dbName", $userName, $userPassword);
        $connection->exec("set names utf8");
        $_SESSION['db_result'] = 'Connect';
        // echo "Connect";

    // =================== ARM WIM =================
    $sql_Lane1  = "select top 1 wTime,wDate from [dbo].[tbt_1_WimSensor_IND9W] WHERE Lane = 1 ORDER BY WimSensor_ID Desc";
    $stmt_Lane1 = $connection->query($sql_Lane1);
    $rowWim1 = $stmt_Lane1->fetch(PDO::FETCH_ASSOC);
  
    $sql_Lane2  = "select top 1 wTime,wDate from [dbo].[tbt_1_WimSensor_IND9W] WHERE Lane = 2 ORDER BY WimSensor_ID Desc";
    $stmt_Lane2 = $connection->query($sql_Lane2);
    $rowWim2 = $stmt_Lane2->fetch(PDO::FETCH_ASSOC);

#===================== Data Lane 1 ==========================
    $timeNow =  time();

    $cut_time1 = substr($rowWim1['wTime'], 0, -5);
    $convert1 = strtotime($cut_time1);
    $diff_time1 = ($timeNow - $convert1)/55;

#===================== Data Lane 2 ==========================
    $cut_time2 = substr($rowWim2['wTime'], 0, -5);
    $convert2 = strtotime($cut_time2);

    $diff_time2 = ($timeNow - $convert2)/55;

#===================== Diff Date Time ==========================
    $dateNow = date('m/d/Y');
    if($dateNow != $rowWim1['wDate']){
        $statusData1 = 'blue';
    }else{
        if($diff_time1 > 60){
            $statusData1 = 'blue';
        }else{
            $statusData1 = 'green';
        }          
    }
    if($dateNow != $rowWim2['wDate']){
        $statusData2 = 'blue';
    }else{
        if($diff_time2 > 60){
            $statusData2 = 'blue';
        }else{
            $statusData2 = 'green';
        }
    }



#===================== End Diff Date Time ==========================

        include('../condition.php');

        echo '
        <div class="card">     
           <div class="card-body">
           <div class="row" style="margin-top:-10px;">
                   <div class="col-md-12">
            <!--========================================================-->
                 <a style="color:#FFF" href="http://49.229.158.23:8080/vws"  target="_blank">  
                 <small>VWS</small> เพชรบูรณ์ (ขาออก)
                 </a>
                 <code><b>Anydesk ID : 882048120 </b></code>
            <!--========================================================-->
            
                </div>
                   
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">
                       
                       <table class="table table-sm  table-bordered table-display">
                           <thead>
                               <tr>
                                   <th>Data1</th>
                                   <th>Data2</th>
                                   <th>Server1</th>  
                                   <th>WIM1</th>
                                   <th>WIM2</th>
                                   <th>Loop1</th>
                                   <th>Loop2</th>
                                   <th>Over1</th>
                                   <th>Over2</th>
                                   <th>LPR1</th>
                                   <th>LPR2</th>
                                   <th width="8%">Relay1</th>
                                   <th width="8%">Relay2</th>
                                   <th width="8%">Relay3</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>
                                   <p class="led-'.$statusData1.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$statusData2.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$server.'"></p>
                                   </td>
                                  
                                   <td>
                                       <p class="led-'.$wim1.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$wim2.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$ras1.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$ras2.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$over1.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$over2.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$lpr1.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$lpr2.'"></p>
                                   </td>
                                   <td>
                                       <p class="led-'.$relay1.'"></p>
                                       <button class="btn btn-success btn-sm btn-block button_relay" data-toggle="modal" data-target="#relay_pet_outbound1" style="'.$display1.'">Reset</button>
                                   </td>
                                   <td>
                                       <p class="led-'.$relay2.'"></p>
                                       <button class="btn btn-success btn-sm btn-block button_relay" data-toggle="modal" data-target="#relay_pet_outbound2" style="'.$display2.'">Reset</button>
                                   </td>
                                   <td>
                                      
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
          
        ';
        
        // ============== Connect DB Server ไม่ได้ ==================
    }catch (Exception $e){
        echo '
        <div class="card">     
               <div class="card-body">
               <div class="row">
                       <div class="col-md-12">
                <!--========================================================-->
                <small>VWS</small> เพชรบูรณ์ (ขาออก) <code><b>Database Disconnect</b></code>
                       </div>
                       
                   </div>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="table-responsive">
    
                           
                           <table class="table table-sm  table-bordered ">
                               <thead>
                                   <tr>
                                       <th>Data1</th>
                                       <th>Data2</th>
                                       <th>Server1</th>
                                      
                                       <th>WIM1</th>
                                       <th>WIM2</th>
                                       <th>Loop1</th>
                                       <th>Loop2</th>
                                       <th>Over1</th>
                                       <th>Over2</th>
                                       <th>LPR1</th>
                                       <th>LPR2</th>
                                       <th>Relay1</th>
                                       <th>Relay2</th>
                                       <th>Relay3</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>
                                       <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                      
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                           <p class="led-red"></p>
                                       </td>
                                       <td>
                                        
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        ';

    }

}

?>

