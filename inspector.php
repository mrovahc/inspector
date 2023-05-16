<link rel="shortcut icon" type="image/png" href="img/inspector.png"/>

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
    <meta charset="utf-8">
    <title>INSPECTOR</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type=text/javascript>
    setTimeout("document.location=document.location", 3600000);/*se refresca la pagina cada 1hs*/
    </script>

    
</head>


<h2 align="center">

    <a href="https://time.is/Santa_Rosa,_La_Pampa_Province" target="_blank" id="time_is_link" rel="nofollow" style="font-size:15px">Ciudad de Santa Rosa:</a><span id="Santa_Rosa__La_Pampa_Province_z10c" style="font-size:15px"></span>
    <script src="//widget.time.is/es.js"></script>
    <script>
    time_is_widget.init({Santa_Rosa__La_Pampa_Province_z10c:{template:"TIME<br>DATE", date_format:"dayname daynum/monthnum/yy"}});
    </script>

<h2 align="center">
  
     <a href="https://www.cpe.com.ar/NotasCpe" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
        <img src="img/logo_cpe.jpg" alt="comentario alterno q ayuda a describir la imagen"
         title="Ingresar a la pagina Oficial de la CPE"
         width="50" 
         height="50" 
         padding="">
        </a>

        <a href="img/Desvios.pdf" target="_blank" title="DESVIOS"type="button" class="btn btn-outline-primary btn-sm"> 
             <img src="img/desvios.png" alt="comentario alterno q ayuda a describir la imagen"
               title="IR a SERVICIOS SUMPLEMENTARIOS"
               width="50" 
               height="50" 
               padding="">
              </a>


      
            <a href="img/Asignacion_Numerica.png" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
             <img src="img/teliplogo.jfif" alt="comentario alterno q ayuda a describir la imagen"
                 title="Ingresar a Asignacion Numerica Telefonia IP"
                  width="50" 
                  height="50" 
                  padding="">
                     </a>
      
                     
          <img src="img/Inspectorga.jpg" alt="comentario alterno q ayuda a describir la imagen"
                 title="INSPECTOR"
                 width="150" 
                 height="150"
                 >

    
            <a href="img/TelefonosUtiles.png" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
             <img src="img/tel2.png" alt="comentario alterno q ayuda a describir la imagen"
                 title="Ingresar a Telefonos Utiles"
                  width="50" 
                  height="50" 
                  padding="">
                     </a>
     

       
            <a href="img/mayojunio23.pdf" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
             <img src="img/reloj2.jfif" alt="comentario alterno q ayuda a describir la imagen"
                 title="Ingresar a PLANILLA HORARIOS CONMUTACION"
                  width="50" 
                  height="50" 
                  padding="">
                     </a>
  

        
            <a href="img/cuadrillasreclamos.pdf" target="_blank" type="button" class="btn btn-outline-primary btn-sm">
             <img src="img/reloj3.jfif" alt="comentario alterno q ayuda a describir la imagen"
                 title="Ingresar a PLANILLA HORARIOS RECLAMOS"
                  width="50" 
                  height="50" 
                  padding=""
                  >
                 </a>

          <h2 align="center">
    
         <a href="https://172.16.0.190:8006/#v1:0:18:4::::::" style="text-decoration:none"  target="_blank" title="Acceder S0 Backups"type="button" class="btn btn-outline-primary btn-sm">
             <img src="img/logo.jpg" alt="comentario alterno q ayuda a describir la imagen"
                title="Acceder S0 Backups"
                 width="200" 
                 height=""> 
                </a> 
        
   

    <font face="arial"size=0>


    <br><br>
    <a href="https://172.16.0.191:8006/#v1:0:18:4::::::" style="text-decoration:none"  target="_blank" title="Acceder S1 Modulos Admin-1" type="button" class="btn btn-outline-primary btn-sm">INGRESAR S1 MODULO 1 </a>  <br><br>
    
    <a href="https://172.16.0.192:8006/#v1:0:18:4::::::" style="text-decoration:none"  target="_blank" title="S2 Modulos 2-3-4" type="button" class="btn btn-outline-primary btn-sm">INGRESAR S2 MODULOS 2-3-4 </a>  <br><br>
    
    <a  href="https://172.16.0.193:8006/#v1:0:18:4::::::" style="text-decoration:none"  target="_blank" title="S3 Modulos  5" type="button" class="btn btn-outline-primary btn-sm">INGRESAR S3 MODULO  5 </a>  <br><br>
    
    <a href="https://172.16.0.194:8006/#v1:0:18:4::::::" style="text-decoration:none"  target="_blank" title="S4 Modulos 8-9" type="button" class="btn btn-outline-primary btn-sm">INGRESAR S4 MODULOS 8-9 </a>  <br><br>
    
    <a href="https://172.16.0.195:8006/#v1:0:18:4::::::" style="text-decoration:none"  target="_blank" title="S5 Modulos 11-12" type="button" class="btn btn-outline-primary btn-sm">INGRESAR S5 MODULOS 11-12 </a>  <br><br>
    
    <a href="https://172.16.0.196:8006/#v1:0:18:4::::::" style="text-decoration:none"  target="_blank" title="S6 Modulos 13-14-15" type="button" class="btn btn-outline-primary btn-sm">INGRESAR S6 MODULOS 13-14-15 </a>  <br><br>
   
    <a  href="https://172.16.0.197:8006/#v1:0:18:4::::::" style="text-decoration:none"  target="_blank" title="S7 Modulos 7-10-16" type="button" class="btn btn-outline-primary btn-sm">INGRESAR S7 MODULOS 7-10-16 </a> <br><br>
    
    <a href="https://172.16.0.198:8006/#v1:0:18:4::::::" style="text-decoration:none"  target="_blank" title="S8 Modulos 6" type="button" class="btn btn-outline-primary btn-sm">INGRESAR S8 MODULO 6 </a> <br><br><br>
  
    
    <h2 align="center">

    <a href="http://192.168.21.31/inspectorga/minion.php" target="" title="Minion, apps y decos"type="button" class="btn btn-outline-primary btn-sm"> 
     <img src="img/minnions2.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="IR a Minion y Apps"
         width="50" 
         height="50"> 
        </a>
      

      
    <a href="http://192.168.21.31/inspectorga/decostarjetasyconax.php" target="" title="DECOS, TARJETAS, HDBOX"type="button" class="btn btn-outline-primary btn-sm"> 
     <img src="img/decos1.jpg" alt="comentario alterno q ayuda a describir la imagen"
         title="IR Decos Tarjetas y Conax"
         width="50" 
         height="50"> 
        </a> 

         
          
     <a href="http://192.168.21.31/inspectorga/monitoreo.php" target="" title="zabbix y monitoreos"type="button" class="btn btn-outline-primary btn-sm">
         <img src="img/monitoreo.webp" alt="comentario alterno q ayuda a describir la imagen"
         title="IR a Zabbix y Monitoreos"
         width="50" 
         height="50">
         </a> 
       

        
     <a href="http://192.168.21.31/inspectorga/autocad.php" target="" title="Autocad y maps"type="button" class="btn btn-outline-primary btn-sm">
         <img src="img/autocad2.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="IR a Autocad y Maps"
         width="50" height="50">
         </a> 
     
     
     <a href="http://192.168.21.31/inspectorga/formularioclave.php" target=""type="button" class="btn btn-outline-primary btn-sm">
        <img src="img/usuariosycontraseñaslogo.png" alt="comentario alterno q ayuda a describir la imagen"
         title="USUARIOS Y CONTRASEÑAS"
         width="50" 
         height="50" 
         padding="">
        </a>
    
      
            <a href="http://192.168.21.31/inspectorga/trazado.php" target=""type="button" class="btn btn-outline-primary btn-sm">
             <img src="img/trazado.png" alt="comentario alterno q ayuda a describir la imagen"
                 title="Info TRAZADO"
                  width="50" 
                  height="50" 
                  padding="">
                     </a>
      

        
            <a href="http://192.168.21.31/inspectorga/ama.php" target=""type="button" class="btn btn-outline-primary btn-sm">
             <img src="img/bluescream.jpg" alt="comentario alterno q ayuda a describir la imagen"
                 title="Info A.M.A."
                  width="50" 
                  height="50" 
                  padding="">
                     </a> 




            <a href="http://192.168.21.31/inspectorga/bloqueostrafico.php" target=""type="button" class="btn btn-outline-primary btn-sm">
            <img src="img/bloqueostel2.png" alt="comentario alterno q ayuda a describir la imagen"
             title="Ingresar a BLOQUEOS TRAFICO"
             width="50" 
             height="50" 
             padding="">
             </a>


             <a href="img/Instructivo.pdf" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
            <img src="img/manual1.png" alt="comentario alterno q ayuda a describir la imagen"
             title="Ingresar a Instructivo Definitivo FINAL (call center)"
             width="50" 
             height="50" 
             padding="">
             </a>

        
        
         <a href="http://192.168.21.31/inspectorga/herramientasprincipales.php" target="" title="Herramientas Principales"type="button" class="btn btn-outline-primary btn-sm">
         <img src="img/boton_herramientas.webp" alt="comentario alterno q ayuda a describir la imagen"
         title="IR a Herramientas Principales "
         width="50" 
         height="50">
         </a>
      
         </font>

        <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
          -->

        </body>

</html>