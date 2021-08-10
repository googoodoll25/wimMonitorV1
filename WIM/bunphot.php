<?php
$ip = "159.192.121.230";
try{
    $exe= shell_exec("ping -n 1 $ip");
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
                   บรรพตพิสัย <code><b>OFFLINE</b></code>
                   </div>
                   
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">

                       
                       <table class="table table-sm  table-bordered ">
                           <thead>
                               <tr>
                                   <th>Data#1</th>
                                   <th>Data#2</th>
                                   <th>Server#1</th>
                                   <th>Server#2</th>
                                   <th>WIM#1</th>
                                   <th>WIM#2</th>
                                   <th>Loop#1</th>
                                   <th>Loop#2</th>
                                   <th>Over#1</th>
                                   <th>Over#2</th>
                                   <th>LPR#1</th>
                                   <th>LPR#2</th>
                                   <th>Relay#1</th>
                                   <th>Relay#2</th>
                                   <th>Relay#3</th>
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
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
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
        $serverName = '159.192.121.230';
        $dbName     = 'db_wim';
        $userName       = 'mettler';
        $userPassword   = 'p@ssw0rd';
        $connection     = new

        PDO("sqlsrv:server=$serverName ; Database = $dbName", $userName, $userPassword);
        $connection->exec("set names utf8");
        $_SESSION['db_result'] = 'Connect';
        // echo "Connect";

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
        echo $diff_time1;

 #===================== Data Lane 2 ==========================
        $cut_time2 = substr($rowWim2['wTime'], 0, -5);
        $convert2 = strtotime($cut_time2);

        $diff_time2 = ($timeNow - $convert2)/55;
        echo $diff_time2;

#===================== Diff Date Time ==========================
        $dateNow = date('m/d/Y');
        if($dateNow != $rowWim1['wDate']){
            $statusData1 = 'blue';
        }else{
            if($diff_time1 > 5){
                $statusData1 = 'blue';
            }else{
                $statusData1 = 'green';
            }
            if($diff_time2 > 5){
                $statusData2 = 'blue';
            }else{
                $statusData2 = 'green';
            } 
        }
#===================== End Diff Date Time ==========================



        echo '
        <div class="card">     
           <div class="card-body">
           <div class="row">
                   <div class="col-md-12">
            <!--========================================================-->
                   บรรพตพิสัย <code><b>Anydesk ID : 743115036 </b></code>
            <!--========================================================-->
                   </div>
                   
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">
                       
                       <table class="table table-sm  table-bordered ">
                           <thead>
                               <tr>
                                   <th>Data#1</th>
                                   <th>Data#2</th>
                                   <th>Server#1</th>
                                   <th>Server#2</th>
                                   <th>WIM#1</th>
                                   <th>WIM#2</th>
                                   <th>Loop#1</th>
                                   <th>Loop#2</th>
                                   <th>Over#1</th>
                                   <th>Over#2</th>
                                   <th>LPR#1</th>
                                   <th>LPR#2</th>
                                   <th>Relay#1</th>
                                   <th>Relay#2</th>
                                   <th>Relay#3</th>
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
                               </tr>
                           </tbody>
                       </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        
        
        ';
        

    }catch (Exception $e){
        echo $e->getMessage();

    }




}

?>

 <!-- <div class="card">
           
           <div class="card-body">
           <div class="row">
                   <div class="col-md-6">
                   บรรพตพิสัย <code><b>Anydesk ID : </b></code>
                   </div>
                   <div class="col-md-3">
                       <small>Data Lane#1 :</small>
                   </div>
                   <div class="col-md-3">
                       <small>Data Lane#2 :</small>
                   </div>

               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="table-responsive">

                       
                       <table class="table table-sm  table-bordered ">
                           <thead>
                               <tr>
                                   <th>Data#1</th>
                                   <th>Data#2</th>
                                   <th>Server#1</th>
                                   <th>Server#2</th>
                                   <th>WIM#1</th>
                                   <th>WIM#2</th>
                                   <th>Loop#1</th>
                                   <th>Loop#2</th>
                                   <th>Over#1</th>
                                   <th>Over#2</th>
                                   <th>LPR#1</th>
                                   <th>LPR#2</th>
                                   <th>Relay#1</th>
                                   <th>Relay#2</th>
                                   <th>Relay#3</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>
                                   <p class="led-green"></p>
                                   </td>
                                   <td>
                                       <p class="led-red"></p>
                                   </td>
                                   <td>
                                       <p class="led-blue"></p>
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                       </div>
                   </div>
               </div>
           </div>
       </div> -->