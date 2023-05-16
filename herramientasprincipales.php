<link rel="shortcut icon" type="image/png" href="img/boton_herramientas.webp"/>
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
    <title> Herramientas Principales </title>
 
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
     <img src="img/imgHerr.png" alt="comentario alterno q ayuda a describir la imagen"
         title="HERRAMIENTAS PRINCIPALES"
         width="150" height=""></a>



    <h2 align="center">
    

    <font face="arial"size=0>

        <br><br><br><br>    
     <a href="https://192.168.36.18:10000/" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
        <img src="img/tecnored1.jpg" alt="comentario alterno q ayuda a describir la imagen"
         title="TECNORED Proxy"
         width="100" height="" ></a><br><br>    
       
       
     <a href="https://192.168.36.16:10000/" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
        <img src="img/tecnored2.jpg" alt="comentario alterno q ayuda a describir la imagen"
         title="TECNORED Provisioning"
         width="100" height="" ></a><br><br>    
     

         <a href="http://192.168.36.42/APROS/" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
     <img src="img/APROS.jpg" alt="comentario alterno q ayuda a describir la imagen"
         title="APROS"
         width="100" height="" ></a><br><br>    
  
     
         <a href="http://192.168.36.202/casper2/clientes/" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
     <img src="img/Casper_Logo.png" alt="comentario alterno q ayuda a describir la imagen"
         title="CASPER"
         width="100" height="" ></a><br><br>    
     
         
            <a href="http://192.168.100.40/principal.php" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
     <img src="img/droopy.jpg" alt="comentario alterno q ayuda a describir la imagen"
         title="DROOPY"
         width="100" height="" ></a><br><br>    
      

     </font>
    
     <h2 align="center">
   

     <br><br>    
    <a href="http://192.168.21.31/inspectorga/inspector.php" target="" title="VOLVER"type="button" class="btn btn-outline-primary btn-sm">
    <img src="img/volver.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="VOLVER A INICIO"
         width="50" height="" ></a>
  
 
</body>