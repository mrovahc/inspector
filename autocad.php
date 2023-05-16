<link rel="shortcut icon" type="image/png" href="img/autocad2.jfif"/>
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
    <title> Autocad y MAPS </title>
</head>
<body>

<style>
body {
  	background-image: url('acuarela.webp');
	background-size: cover;
	background-position: center;
	font-family: sans-serif;

}
</style>

<br>


    <h2 align="center">
    <img src="img/autocad2.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="Autocad y MAPS "
         width="140" height=""/>
       
         <font face="arial" size=0>

     <br><br><br><br><br><br><br>
    <a href="http://192.168.36.47/SRAdmin/NapAdmin/?"style="text-decoration:none" target="_blank" title="NAPs"type="button" class="btn btn-outline-primary btn-sm">MAPA DE NAPs (PROCESAR SANTA ROSA)</a> <br><br>
  
    <a href="http://192.168.36.211/SR2NapAdmin/"style="text-decoration:none" target="_blank" title="NAPs"type="button" class="btn btn-outline-primary btn-sm">MAPA DE NAPs (PROCESAR SANTA ROSA CENTRO)</a> <br><br>
    
    <a href="http://192.168.36.47/CATRadmin/NapAdmin/"style="text-decoration:none" target="_blank" title="NAPs"type="button" class="btn btn-outline-primary btn-sm">MAPA DE NAPs (PROCESAR CATRILO)</a> <br><br>
    
    <a href="http://192.168.36.47/SRAdmin/Naps/"style="text-decoration:none" target="_blank" title="NAPs"type="button" class="btn btn-outline-primary btn-sm">MAPA DE NAPs (SANTA ROSA)</a> <br><br>

     <a href="http://192.168.36.47/naps/Naps/"style="text-decoration:none" target="_blank" title="NAPs"type="button" class="btn btn-outline-primary btn-sm">MAPA DE NAPs (CATRILO)</a> <br><br>

     <a href="http://192.168.36.36/cpetel/"style="text-decoration:none" target="_blank" title="NAPs"type="button" class="btn btn-outline-primary btn-sm">MAPA DE LA RED CPETEL</a> <br><br>
 

    
  <h2 align="center">

    <br><br><br><br><br><br><br>
    <a href="http://192.168.21.31/inspectorga/inspector.php" target="" title="VOLVER"type="button" class="btn btn-outline-primary btn-sm">
    <img src="img/volver.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="VOLVER A INICIO"
         width="50" height="" ></a>
 
        </font>
    </body>

</html>