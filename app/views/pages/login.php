
﻿<?php  require ROUTE_APP.'/views/inc/header.php';?>

    <form name="Login"  method="post" action="<?php echo ROUTE_URL.'/Login/login'?>" onsubmit="return verifyLogin()">

      <div id="LeftBanner" >
      </div>

      <div id="CenterBanner">

        <h1 align="left">Iniciar Sesion en Brain Community</h1>
        <h3 align = "left">Ingrese los detalles de su cuenta</h3>
        <h5 align="left">Nombre De Usuario</h5>


        <h4 id="ValidationUserName">El usuario es obligatorio*</h4>
        <input id="GeneralInput" type="text" name="username" /><br>

        <h5 align = "left">Contraseña</h5>

        <h4 id="ValidationPassword">La contraseña es obligatoria*</h4>
        <input id="GeneralInput" type="password" name="password" value=""/>

        <br/><br/>

        <h4 id="UsernameError">Usuario no encontrado</h4>

        <br/><br/>

        <input id="GeneralButton" type="submit" name="Enter"/>
	<br><br>
	<a href="<?php echo ROUTE_URL.'/Login/register'?>">Registrate</a>
  <a href = "../Views/Forgot_password.html">¿Olvido su contraseña?</a>
     </div>

    </form>

<?php require ROUTE_APP.'\views\inc\footer.php';?>
