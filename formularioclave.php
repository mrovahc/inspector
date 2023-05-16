<!DOCTYPE html>
<html>
<head>
	<title>VER CLAVES</title>
  <meta http-equiv="refresh" content="1800000;url=../login/logout.php" /> <!--se refresca la pagina cada 1hs y vuelve a la pagina de login-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="shortcut icon" type="image/png" href="img/usuariosycontraseñaslogo.png"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
  
body {
  	background-image: url('acuarela.webp');
  	background-size: cover;
	  background-position: center;
	  font-family: sans-serif;

}
</style>


</head>

<body>



	<div class="register-box">
  
		<h1>Ingresar</h1><br>
		<form onsubmit="return validate()">
			<div class="user-box">
        <h6>Usuario:</h6>
				<input type="text" name="username" id="username" required="">
				
			</div>
			<div class="user-box">
      <h6>Password:</h6>
			<input type="password" name="password" id="password" required="">
				
			</div>
			<button type="submit"type="button" class="btn btn-outline-dark btn-sm">Enviar</button><br><br><br>
			<a href="#" id="redirect-link" style="display:none;">Redirigiendo...</a>
		</form>

    <h6 align="center">
    <?php
session_start();
$username = $_SESSION['username'];
if(!isset($username)){
  header("location:../login/index.html");
}else{  
  echo "<a href='../login/logout.php'> LOGOUT </a>";
}
?>

<br>
<br>
    <h2 align="center">
    <a href="https://onbalance.thomsonreuters.com.ar/#/" target="blank_" title="Ingresar Recibo de sueldo"type="button" class="btn btn-outline-primary btn-sm">
        <img src="img/recibo.png" alt="comentario alterno q ayuda a describir la imagen"
        title="VER RECIBO DE SUELDO-"
        width="200" height="" >
        </a>

<br>
<br>
<br>



     <h2 align="center">
     <a href="http://192.168.21.31/inspectorga/inspector.php" target="" title="VOLVER"type="button" class="btn btn-outline-primary btn-sm">
     <img src="img/volver.jfif" alt="comentario alterno q ayuda a describir la imagen"
         title="VOLVER A INICIO"
         width="50" height="" ></a>

	</div>


 
  
<script type="text/javascript">
	function validate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Validar que el nombre de usuario y la contraseña no estén vacíos
  if (username == "" || password == "") {
    alert("Por favor ingrese su nombre de usuario y contraseña.");
    return false;
  }

  // Validar que el nombre de usuario tenga al menos 2 caracteres
  if (username.length < 2) {
    alert("El nombre de usuario debe tener al menos 2 caracteres.");
    return false;
  }

  // Validar que la contraseña tenga al menos 6 caracteres
  if (password.length < 6) {
    alert("La contraseña debe tener al menos 6 caracteres.");
    return false;
  }

  // Validar que el nombre de usuario y la contraseña sean correctos
  if (username != "cpa" || password != "alfonsocm") {
    alert("El nombre de usuario o la contraseña son incorrectos.");
    return false;
  }

  // Si el registro es exitoso, redirigir a la página de destino
  window.location.href = "http://192.168.21.31/inspectorga/usuariosycontraseñas.php";

  // Devolver false para evitar que el formulario se envíe
  return false;
}
</script>


</body>


</html>