<link rel="shortcut icon" type="image/png" href="img/bloqueostel2.png"/>
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
<html>


<head>

	<title>Bloqueos de trafico</title>
	<meta http-equiv="refresh" content="1800000;url=../login/logout.php" /> <!--se refresca la pagina cada 1hs y vuelve a la pagina de login-->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

  <div class="container">

<h2 align="center">


<h2 align="center">
        <a href="img/bloqueos de trafico.pdf" target="_blank"type="button" class="btn btn-outline-primary btn-sm">
            <img src="img/bloqueostel2.png" alt="comentario alterno q ayuda a describir la imagen"
                title="Info Bloqueos de trafico pdf"
                 width="60" 
                 height="60" 
                 padding="">
                    </a>

<h6>
<mark> Lista Blanca Standard </mark> <br><br>

Numeros pedidos por el abonado. <br>

1xx <br>
2x. <br>
3x. <br>
4x. <br>
5x. <br>
6x. <br>
7x. <br>
08x. <br><br>


<mark>Lista Negra Standard</mark><br><br>

LLamadas Masivas y audiotexto + intraaerea + internacional + larga distancia nacional + celulares.<br><br>

Caracteristicas q desean bloquear.<br>

00x. PARA INTERNACIONAL <br>
01x. PARA LARGA DISTANCIA <br>
02x. PARA LARGA DISTANCIA <br>
03x. PARA LARGA DISTANCIA <br>
15x. PARA CELULARES. <br>
02954x. <br>

060x. Para 0609 llamadas masivas y audiotexto..<br>

491x. INTRAAREA<br>
493x. INTRAAREA<br>
494x. INTRAAREA<br>
496x. INTRAAREA<br>

*20*CLAVE# ACTIVA<br>
#20*CLAVE# DESACTIVA<br>
*80*CLAVE-VIEJA*CLAVE-NUEVA#
</h6>

   <h2 align="center">
   <a href="http://192.168.21.31/inspectorga/inspector.php" target="" title="VOLVER"type="button" class="btn btn-outline-primary btn-sm">
   <img src="img/volver.jfif" alt="comentario alterno q ayuda a describir la imagen"
		title="VOLVER A INICIO"
		width="50" height="" ></a>
    

</body>
</html>