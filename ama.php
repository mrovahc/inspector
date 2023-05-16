<link rel="shortcut icon" type="image/png" href="img/bluescream.jpg"/>
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
    <title>AMA</title>
</head>
<body>
    <div class="container">

    <h6 align="center">
        
        <img src="img/bluescream.jpg" alt="comentario alterno q ayuda a describir la imagen"
        width="100" height="100" 
        >

    <h5>1) TRSFBUFER:TIPO=AMA; (Transferir el buffer de memoria al disco rigido) <br>
        2) TRSFARCH:ARCH=AMA.DDMMAAAA.S/IA.ICAMA,NSVR=AMA.X,MOCOP=POST; (Transferencia al MOD) <br>     
        3) TRSFARCH:ARCH=AMA.DDMMAAAA.S/IA.ICAMA,MOCOP=POST; (Trasferencia al disco rigido) <br>   
        4) LIBARCHCIC.ARCH=IA.ICAMA; (Luego de hacer las 2 transferencias se debe liberar el archivo IA.ICAMA para que comience un nuevo ciclo) <br><br>
        
        # NOTA:
        Se debe copiar el archivo del ama desde el disco de la central al disco de la pc, esto se hace con el programa "OPENFT"el cual esta en la pc SIEMENS.(omt-0) <br>
        a) Abrir el programa  "OPENFT" <br>
        b) Clickear en "FILE" y luego elegir "TRANSFER" ( se abre la pantalla de transferencias de archivos). <br>

        # OBSERVACION: <br>
        En el campo "LOCAL FILE" se debe poner "DDMMAAAA-1" (nombre del archivo con el que se va a guardar en la pc) NOTA: previamente con el boton "SELECT" se elige el directorio donde se guardara el archivo. <br>
        Directorio de almacenamiento "C:/AMA´S/AÑO/MES/" colocar en el campo "NOMBRE DE ARCHIVO", el nombre del archivo a guardar (DDMMAA-S) luego apretar el boton "ABRIR" <br>
        En el campo "REMOTE FILE" se coloco el nombre de archivo con el que se guardo en la EWSD (AMA.DDMMAA.S). <br>
        En el campo "PARTNER NAME" se coloco el nombre del procesador de la EWSD(CPETEL) en mayusculas. <br>
        En el campo "USER ID" se coloca el nombre de usuario de la sesion x25 que se va a abrir (EWSD-0) en mayuscula. <br>
        En el campo "PASSWORD" colocar la contraseña de la sesion x25 que se va a abrir (EWSD-0) en mayuscula. <br>
        En el campo "DIRECTION" se debe tildar la opcion "RECEIVE". <br>
        En el campo "FILE TYPE" se escoge la opcion "BINARY". <br>
        En el campo "MODE" debe estar en "SYCHRONUS". <br>
        En el campo "WRITING MODE" debe estar en "OVERWRITE". <br> 
        Luego presionar el boton "TRANSFER" <br><br>

        Comienza la trasferencia desde la EWSD a la pc. <br><br>

        # IMPORTANTE: Se post.procesara el archivo bajado de la central con el programa WINCONVAMA.<br>
          a) Abrir el WINCONVAMA. / clickear en el boton "INGRESAR DATOS" / abre la pantalla donde se seleccionara el archivo faltante. <br>
          b) En "BUSCAR EN" se elige en donde esta el archivo C:/AMA PROCESADO/AÑO XXXX/MES (NOMBRE DEL ARCHIVO D:\AMAPROCESADO\AÑO2000\03-MARZO2020\290320-1) <br>
          c) En el campo "NOMBRE DEL ARCHIVO" colocar el nombre con el que se va a guardar el archivo convertido (DDMMAA_S) <br>             y guardar como tipo : archivos de salida(*.sal) <br>
          d) clickear en el boton "GUARDAR". <br>

          Se abre otra pantalla (Numero_de_A) que se debe clikear en boton "OK" directamente <br>
          Luego vuelve a la pantalla original de WINCONVAMA y se debe clickear en el boton "PROCESAR" <br>
          Comienza el POST procesamiento <br>
          Luego se abre WINCONVAMA-FINALIZADO clickear en ACEPTAR. <br>
          Luego clickear en la pantalla azul del BMML para minimizar. <br><br>

          #Por ultimo se debe transferir el archivo procesado a la pc cpetel back-up de la siguiente forma: <br>
          a) abrir explorador <br>
          b) mi pc <br>
          c) disco(d:) BCT / AMA´PROCESADO/ AÑO 2020/ 11-NOVIEMBRE 2020 / ELEGIR ARCHIVO <br> 
          d) ahora abrir mi pc, entorno de red, toda la red, red de microsoft windows, cpetel, cpetel back-up, año2020, 11-noviembre2020. <br>

          Picar arriba del archivo elegido en el disco (D:) y llevarlo hasta el disco (H:) arriba de 11-noviembre 2020 soltarlo. <br><br>

          Por ultimo verificar que cpetel back-up lo haya recibido. <br>
          Luego el archivo "crudo" del disco (C:) Picarlo y llevarlo hasta el disco (Z:) <br>
          Arriba del 11-noviembre 2020  soltarlo. <br><br>

          CORREGIR LOS AMA NOMBRADOS ERRONEAMENTE <br><br>

            DEL MOD AL DISCO <br>
            TRSFARCH:ARCH=AMA.02112020.1/AMA.02112020,NSVE=AMA.41;<br><br>

            DEL DISCO AL MOD <br>
            TRSFARCH:ARCH=AMA.02112020.1,NSVE=AMA.41; <br><br>

            PROTOCOLIZAR Y BORRAR <br>
            PROARCH:ARCH=AMA.10072019.1,NSV=AMA.41; <br>
            PROARCH:ARCH=AMA.02112020.1; <br> <br>

            BORARCH:ARCH=AMA.10072019.4,NSV=AMA.41;<br>
            BORARCH:ARCH=AMA.10072019.4; (borra .4) <br><br>

            BORARCH:ARCH=AMA.01112022.; (borra dia completo) <br>
     </h5>


        <h2 align="center">
           
             <a href="http://192.168.21.31/inspectorga/inspector.php" target="" title="VOLVER"type="button" class="btn btn-outline-primary btn-sm">
             <img src="img/volver.jfif" alt="comentario alterno q ayuda a describir la imagen"
                  title="VOLVER A INICIO"
                  width="50" height="" ></a>
           


</body>
</html>