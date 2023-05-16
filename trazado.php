<link rel="shortcut icon" type="image/png" href="img/trazado.png"/>
<?php
session_start();
$username = $_SESSION['username'];


if(!isset($username)){
  header("location:../login/index.html");
}else{  
 
  echo "<a href='../login/logout.php'> LOGOUT </a>";
}
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
<meta http-equiv="refresh" content="1800000;url=../login/logout.php" /> <!--se refresca la pagina cada 1hs y vuelve a la pagina de login-->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAZADO</title>
</head>
<body>


    <div class="container">

        <h2 align="center">
        <a href="img/Trazados.pdf" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
            <img src="img/trazado.png" alt="comentario alterno q ayuda a describir la imagen"
                title="Info TRAZADO acceder al pdf"
                 width="100" 
                 height="100" 
                 padding="">
                    </a>
            

    <h6>1) PROARCH:ARCH=TS.;                     (protocoliza los archivos de trafico) 1ER COMANDO <br><br>

        2) PROCARARTRF:ARCH=TS.GOSX.IXX;         (verificar fecha desde hasta del archivo de trafico a utilizar) <br><br>
        
        3) PROARCHTRF:ARCH=TS.GOSX.IXX;    
              (protocoliza el archivos de trafico terminado) <br><br>
        
        4) REGIGRS:UNIDAD=MDD,CZO=AA-MM-DD,TER=AA-MM-DD,IV=10-00-12-00;     (ejecutar el nuevo archivo de trafico a utilizar) ESTE EJECUTAR SI O SI <br>
        
        0) BORARCH:ARCH=TS.GOSX.IXX;             (borrar archivo de trafico) <br><br>
        
        # NOTA:
        Si se da el caso que durante el "Copy Log" no permite guardar en disco el bloque seleccionado a mano,
        se puede evitar protocolizar nuevamente el archivo, ejecutando la accion "Mark time block" bajo el menu "Block" con los parametros de fecha inicial y final que se completan por defecto.
        Hecho esto, se procede a ejecutar el comando "Copy Log" para guardarlo en disco. <br><br>
        
        # OBSERVACION: <br>
        El archivo guardado contendra un periodo mayor al del protocolo realizado. Por lo tanto, se debe eliminar todo el texto antes del comando "PROARCHTRF:ARCH=TS.GOSX.IXX;" usado (TIP: Ctrl+B para buscarlo). Por ultimo, ir al final y chequear que figure "NO HAY (MAS) DATOS A PROTOCOLIZAR DISPONIBLES /n FIN JOB 0XXX". <br><br>
        
        # IMPORTANTE: El numero de "JOB" debe ser el mismo que el generado al ejecutar el comando "PROARCHTRF:ARCH=TS.GOSX.IXX;" (comprobacion necesaria para evitar contenido equivocado). <br><br>
                
            ej. (JOB 0764):
                    "CPTEL/COPCPZ2V13510724/003	22-07-19  14:46:14
                     0764         OMT-00/OMT0           2893/00880
                     PROARCHTRF:ARCH=TS.GOSX.
        
                    "CPTEL/COPCPZ2V13510724/003	22-07-19  15:06:40
                     0764         OMT-00/OMT0           2893/00000
                     NO HAY (MAS) DATOS A PROTOCOLIZAR DISPONIBLES
                     FIN JOB 0764" <br><br>
        
        CLAVE WINSCP3: pampa1234 <br></h6>


<br>
<br>
<h2 align="center">
           
    <a href="http://192.168.21.31/inspectorga/inspector.php" target="" title="VOLVER"type="button" class="btn btn-outline-primary btn-sm">
    <img src="img/volver.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="VOLVER A INICIO"
         width="50" height="" ></a>
          

</body>
</html>