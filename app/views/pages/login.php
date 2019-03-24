<?php  require ROUTE_APP.'/views/inc/header.php';?>

    <form name="Login"  method="post" action="<?php echo ROUTE_URL.'/Login/login'?>" onsubmit="return verifyLogin()">

      <div id="LeftBanner" >

      </div>

      <div id="CenterBanner">

        <h1 align="left">Iniciar Sesion en Brain Community</h1>
        <h3 align = "left">Ingrese los detalles de su cuenta</h3>
        <h5 align="left">Nombre De Usuario</h5>


        <h4 class="errText" id="ValidationUserName">El usuario es obligatorio*</h4>
        <input id="GeneralInput" type="text" name="username" /><br>

        <h5 align = "left">Contraseña</h5>

        <h4 class="errText" id="ValidationPassword">La contraseña es obligatoria*</h4>
        <input id="GeneralInput" type="password" name="password" value=""/>

        <br/><br/>
        <?php

        if ($data == '1') {
          // code...
          ?>
          <h4>Usuario no encontrado</h4>
          <?php
        }else if($data == '2'){
          // code...
          ?>
          <h4>Contraseña incorreta</h4>
          <?php
        }
         ?>

        <br/><br/>

        <input id="GeneralButton" type="submit" name="Enter"/>
	<br><br>
	<a href="<?php echo ROUTE_URL.'/Register'?>">Registrate</a>
  <a href="<?php echo ROUTE_URL.'/Login/forgotPassword'?>">¿Olvido su contraseña?</a>
     </div>

    </form>

    <?php  require ROUTE_APP.'/views/inc/footer.php';?>
