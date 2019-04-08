<?php  require ROUTE_APP.'/views/inc/header.php';?>

    <form name="Login"  method="post" action="<?php echo ROUTE_URL.'/Login/login'?>" onsubmit="return verifyLogin()">

      <div id="LeftBanner" >

      </div>

      <div id="CenterBanner">

        <h1 align="left">Iniciar Sesion en Brain Community</h1>
        <h3 align = "left">Ingrese los detalles de su cuenta</h3>

        <h4 class="errText" id="ValidationUserName">El usuario es obligatorio*</h4>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="email" type="text" class="form-control" name="username" placeholder="Username">
        </div>

        <h4 class="errText" id="ValidationPassword">La contraseña es obligatoria*</h4>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>

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
