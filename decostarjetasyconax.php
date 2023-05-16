<link rel="shortcut icon" type="image/png" href="img/decos1.jpg"/>
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
    <meta charset="utf-8">
    <title> Decos Tarjetas Y Conax </title>
</head>
<body>


    <h2 align="center">
    <img src="img/decos1.jpg" alt="comentario alterno q ayuda a describir la imagen"
         title="Decos Tarjetas Y Conax "
         width="200" height="150" />
         
         <font face="arial" size=0>


    <br><br><br><br><br><br><br><br><br>
     <a href="http://192.168.36.36/decos/"style="text-decoration:none" target="_blank" title="Movimientos de Decos"type="button" class="btn btn-outline-primary btn-sm">DEPOSITO DE DECOS </a> <br><br>
   
     <a href="http://intranetcpe/TCTarjetasEnConax.aspx"style="text-decoration:none" target="_blank" title="conax DECOS BLANCOS Y NEGROS"type="button" class="btn btn-outline-primary btn-sm">CONAX DECOS </a> <br><br>
 
     <a href="http://intranetcpe/TCPairingTarjetDecos.aspx"style="text-decoration:none" target="_blank" title="conax DECOSHD BOX"type="button" class="btn btn-outline-primary btn-sm">CONAX HD-BOX </a> <br><br>

     <a href="http://192.168.0.28/consultas/"style="text-decoration:none" target="_blank" title="Buscar usuario"type="button" class="btn btn-outline-primary btn-sm">BUSCAR USUARIO POR NUMERO DE TARJETA TV </a> <br><br>
    
 
     <br><br><br><br><br><br><br><br><br><br><br><br><br>
     
  <h2 align="center">
    <a href="http://192.168.21.31/inspectorga/inspector.php" target="" title="VOLVER"type="button" class="btn btn-outline-primary btn-sm">
    <img src="img/volver.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="VOLVER A INICIO"
         width="50" height="" ></a>

        </font>


    </body>

</html>