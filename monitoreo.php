<link rel="shortcut icon" type="image/png" href="img/monitoreo.webp"/>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <title> Monitoreo Zabixx </title>

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

  
          
    <h2 align="center">
    <img src="img/monitoreo.webp" alt="comentario alterno q ayuda a describir la imagen"
         title="CONTROL Y MONITOREOS"
         width="150" height="125" />
    
         <font face="arial" size=0>

    <br><br>
    <a href="https://www.usina.net.ar/mfredes/zabbdroopy/modemstatus.php?q=0015CE049C01"style="text-decoration:none" target="_blank" title="Acceder POR MODEM"type="button" class="btn btn-outline-primary btn-sm">ESTADO DEL MODEM </a> <br><br>
 
    <a href="https://www.usina.net.ar/mfredes/zabbdroopy/nodestatus.php?q=51-1"style="text-decoration:none" target="_blank" title="Acceder POR NODO"type="button" class="btn btn-outline-primary btn-sm">ESTADO DE LOS NODOS </a> <br><br>
  
    <a href="https://www.usina.net.ar/mfredes/zabbdroopy/nodestatus_det.php?q=3"style="text-decoration:none" target="_blank" title="Acceder POR NODO 2"type="button" class="btn btn-outline-primary btn-sm">ESTADO DE LOS NODOS 2 </a> <br><br>

    <a href="https://www.usina.net.ar/mfredes/zabbdroopy/cpetelstatus/"style="text-decoration:none" target="_blank" title="Acceder a los Modulos de Telefonia"type="button" class="btn btn-outline-primary btn-sm">ESTADO DE LOS MODULOS DE TELEFONIA</a> <br><br>
  
    <a href="https://www.usina.net.ar/mfredes/zabbdroopy/bookmarkcmts.php"style="text-decoration:none" target="_blank" title="Acceder POR NODO"type="button" class="btn btn-outline-primary btn-sm">MONITOREO DE LOS NODOS </a> <br><br>

    <a href="https://www.usina.net.ar/mfredes/zabbdroopy/bookmarkstatus.php"style="text-decoration:none" target="_blank" title="Acceder Estado de los NODOS"type="button" class="btn btn-outline-primary btn-sm">MONITOREO NODOS GENERAL CPETEL</a> <br><br>
 
    <a href="https://192.168.36.49/logs/caidas_nodo.php"style="text-decoration:none" target="_blank" title="Logs NODOS CAIDOS"type="button" class="btn btn-outline-primary btn-sm">CONTROL DE NODOS CAIDOS </a> <br><br>
 
    <a href="https://192.168.36.49/reclamos/checkonline/"style="text-decoration:none" target="_blank" title="CHEQUEAR RECLAMOS MTA CAIDAS"type="button" class="btn btn-outline-primary btn-sm">CHEQUEAR MTAS CAIDAS </a> <br><br>
  
    <a href="http://192.168.36.49/logs/caidas_generales_calix.php?q=Mar%20%206%2022%3A19%3A41%20192.168.36.210%20Catrilo%3A%20Event%20for%20ONT%20%22serial%20%23%3A%20424D75%2C%20vendor%3A%20CXNK%22%20at%202022%2F03%2F06%2022%3A19%3A42.08%3A%20%22ONT%20Event%3A%20Departure%20--%20GPON%20port%20%221%2F6%22%22"style="text-decoration:none" target="_blank" title="CHEQUEAR FTTH CAIDAS"type="button" class="btn btn-outline-primary btn-sm">OLT CALIX CAIDAS  </a> <br><br>
  
    <a href="https://nodos.cpesr.com.ar/eventonodo/"style="text-decoration:none" target="_blank" title="BARREDOR"type="button" class="btn btn-outline-primary btn-sm">EVENTOS DE LOS NODOS</a> <br><br>
    
    <a href="https://nodos.cpesr.com.ar/packsm3"style="text-decoration:none" target="_blank" title="BARREDOR"type="button" class="btn btn-outline-primary btn-sm">MODELO DE LOS MODEMS CPETEL</a> <br><br>
    
 
    
  <h2 align="center">
   
    <a href="http://192.168.21.31/inspectorga/inspector.php" target="" title="VOLVER"type="button" class="btn btn-outline-primary btn-sm">
    <img src="img/volver.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="VOLVER A INICIO"
         width="50" height="" ></a>
   
        </font>


        
    </body>

</html>