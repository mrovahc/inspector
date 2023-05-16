<link rel="shortcut icon" type="image/png" href="img/minnions2.jfif"/>
<?php
session_start();
$username = $_SESSION['username'];


if(!isset($username)){
  header("location:../login/index.html");
}else{  
 
  echo "<a href='../login/logout.php'> LOGOUT </a>";
}
?>

<html>
<head>
    <meta http-equiv="refresh" content="1800000;url=../login/logout.php" /> <!--se refresca la pagina cada 1hs y vuelve a la pagina de login-->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <br>
    <title> MINIOM </title>
</head>



<body>

    <h2 align="center">

    <img src="img/minnions2.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="MINION y Decos"
         width="100" height="" />
         
         <font face="arial"size=0>

         <h2 align="center">


      <br><br>
     <a href="http://192.168.36.36:8080/MinionTel/"style="text-decoration:none" target="_blank" title="Gestion de Stocks de MTAs"type="button" class="btn btn-outline-primary btn-sm">INGRESAR AL MINION CONTROL DE STOCK </a> <br><br>
  
     <a href="http://192.168.36.36/HFC2/Tickets/"style="text-decoration:none" target="_blank" title="Gestion de Trabajos pl. Exterior"type="button" class="btn btn-outline-primary btn-sm">TICKETS PARA PLANTEL EXTERIOR </a> <br><br>
 
     <a href="http://192.168.36.36:8080/GestionConex/"style="text-decoration:none" target="_blank" title="App Instalaciones"type="button" class="btn btn-outline-primary btn-sm">CONFIRMAR TRABAJOS INSTALACIONES </a> <br><br>
 
     <a href="http://192.168.36.36/Reclamos/"style="text-decoration:none" target="_blank" title="App Reclamos"type="button" class="btn btn-outline-primary btn-sm">CONFIRMAR TRABAJOS RECLAMOS </a> <br><br>

     <a href="http://192.168.36.47/Gabriela/"style="text-decoration:none" target="_blank" title="GABRIELA WEB"type="button" class="btn btn-outline-primary btn-sm">GABRIELA WEB </a> <br><br>
   
     <a href="http://192.168.0.26:8095/"style="text-decoration:none" target="_blank" title="RECLAMOS"type="button" class="btn btn-outline-primary btn-sm">RECLAMOS WEB </a> <br><br>

     <a href="https://www.usina.net.ar/mfredes/droopy-helper/renuncias.php"style="text-decoration:none" target="_blank" title="GUIA"type="button" class="btn btn-outline-primary btn-sm">RENUNCIAS DE CABLEMODEMS Y MTAs </a> <br><br>
  
     <a href="http://192.168.36.36/telefonia/numeros-telefonicos/"style="text-decoration:none" target="_blank" title="GUIA"type="button" class="btn btn-outline-primary btn-sm">NUMEROS TELEFONICOS </a> <br><br>
  
     <a href="http://192.168.36.36/telefonia/index.php/buscador"style="text-decoration:none" target="_blank" title="GUIA"type="button" class="btn btn-outline-primary btn-sm">CONVENIOS CON 0800 </a> <br><br>
   
     <a href="https://www.usina.net.ar/provisionarMotoWifi.php?submit=Volver"style="text-decoration:none" target="_blank" title="RESTAURAR DE FABRICA"type="button" class="btn btn-outline-primary btn-sm">RESTAURAR MODEMS DE FABRICA  </a> <br><br>
   
     <a href="http://192.168.36.36/telefonia/index.php/barredor"style="text-decoration:none" target="_blank" title="BARREDOR"type="button" class="btn btn-outline-primary btn-sm">COLOCAR BARREDOR</a> <br><br>
   
     </font>
     <h2 align="center">
   
      <a href="http://192.168.21.31/inspectorga/inspector.php" target="" title="VOLVER"type="button" class="btn btn-outline-primary btn-sm">
        <img src="img/volver.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="VOLVER A INICIO"
         width="50" height="" ></a>
       
      
 
</html>


