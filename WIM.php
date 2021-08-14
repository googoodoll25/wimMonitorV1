<?php include('Header.php'); ?>

<div class="container-fluid mt-4">
    <h3>WIM</h3>

    <div id="bunphot"></div>
    <div id="petchaboon"></div>
    <div id="thasae"></div>
    <div id="yso"></div>
       

  
    
</div>
<!-- Container -->



<script type="text/javascript" src="Source/Bootstrap/jquery.js" ></script>
<script type="text/javascript" src="Source/Bootstrap/popper.min.js" ></script>
<script type="text/javascript" src="Source/Bootstrap/bootstrap.min.js" ></script>
<script type="text/javascript" src="Source/Bootstrap/jquery.easing.min.js"></script>
<script type="text/javascript" src="Source/Bootstrap/bootstrap.bundle.min.js"></script>
<?php
 include('WIM_Modal.php');
?>
   
</body>
</html>


<script type="text/javascript">
    $(document).ready(function(){    
        
        bunphot(); 
        petchaboon();
        thasae();
        yso();
        
    });
    
    function bunphot(){
        $('#bunphot').load('WIM/bunphot.php', function(){
           setTimeout(bunphot, 5000);
        });
    }
    function thasae(){
        $('#thasae').load('WIM/thasae.php', function(){
           setTimeout(thasae, 5000);
        });
    }
    function petchaboon(){
        $('#petchaboon').load('WIM/petchaboon.php', function(){
           setTimeout(petchaboon, 5000);
        });
    }
    function yso(){
        $('#yso').load('WIM/yso.php', function(){
           setTimeout(yso, 5000);
        });
    }
    
</script>

<script type="text/javascript">
var MyWindow;

function bunphot1(){
    MyWindow=window.open('http://159.192.121.230:8041/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}
function bunphot2(){
    MyWindow=window.open('http://159.192.121.230:8042/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}
function thasae1(){
    MyWindow=window.open('http://103.10.228.140:8041/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}
function thasae2(){
    MyWindow=window.open('http://103.10.228.140:8042/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}
function thasae3(){
    MyWindow=window.open('http://103.10.228.140:8043/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}
function pet1(){
    MyWindow=window.open('http://103.10.231.129:8041/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}
function pet2(){
    MyWindow=window.open('http://103.10.231.129:8042/stateFull.xml?relayState=2','MyWindow','width=400,height=200');
    setTimeout(closeWin, 500)
}

function closeWin() {
    MyWindow.close();
}
</script>