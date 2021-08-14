<?php
include('Header.php');
?>

<div class="container-fluid mt-4">
    <h3>VWS</h3>

    <div id="thasae"></div>
   
       
</div>


<script type="text/javascript" src="Source/Bootstrap/jquery.js" ></script>
<script type="text/javascript" src="Source/Bootstrap/popper.min.js" ></script>
<script type="text/javascript" src="Source/Bootstrap/bootstrap.min.js" ></script>
<script type="text/javascript" src="Source/Bootstrap/jquery.easing.min.js"></script>
<script type="text/javascript" src="Source/Bootstrap/bootstrap.bundle.min.js"></script>
<?php
 include('VWS_Modal.php');
?>

<script type="text/javascript">
    $(document).ready(function(){    
        
        thasae();
        
    });
    
    function thasae(){
        $('#thasae').load('VWS/vws_thasae.php', function(){
           setTimeout(thasae, 5000);
        });
    }
 
</script>
<script type="text/javascript">
var MyWindow;

function Namnao1(){
    MyWindow=window.open('http://192.168.216.41/state.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function Namnao2(){
    MyWindow=window.open('http://192.168.216.42/state.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function inbound1(){
    MyWindow=window.open('http://49.229.156.86:8041/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function inbound2(){
    MyWindow=window.open('http://49.229.156.86:8042/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function outbound1(){
    MyWindow=window.open('http://49.229.158.23:8041/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function outbound2(){
    MyWindow=window.open('http://49.229.158.23:8042/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function thasae1(){
    MyWindow=window.open('http://110.77.134.65:8041/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function thasae2(){
    MyWindow=window.open('http://110.77.134.65:8042/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function thasae3(){
    MyWindow=window.open('http://110.77.134.65:8043/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function closeWin() {
    MyWindow.close();
}

</script>
</body>
</html>
