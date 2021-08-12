<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Source/image/favicon.ico" type="image/x-icon">
    <title>WIM Monitoring</title>
    <link rel="stylesheet" href="Source/Bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="Source/css/css.css">
</head>
<body> 
<nav class="navbar navbar-expand-lg navbar-dark navColor">

    <img src="Source/image/LogoPAT.png" alt="" width="30" height="30" class="d-inline-block align-top">
    <a class="navbar-brand ml-2" href="#">WIM Monitoring</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item" id="nav-item">
         
        <a class="nav-link mr-3" href="#"> WIM</a>
      </li>
      <li class="nav-item" id="nav-item">
        <a class="nav-link" href="#">VWS</a>
      </li>  
    </ul>
  </div>
</nav>

<div class="container-fluid mt-4">
    <h3>WIM</h3>

    <div id="bunphot"></div>
       

  
    
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
        
    });
    
    function bunphot(){
        $('#bunphot').load('WIM/bunphot.php', function(){
           setTimeout(bunphot, 10000);
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