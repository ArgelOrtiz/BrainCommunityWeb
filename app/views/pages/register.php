<?php  require ROUTE_APP.'/views/inc/header.php';?>
	<form name="Register"  method="post" action="<?php echo ROUTE_URL.'/Login/register'?>" onsubmit="return validar()">
      <div id="Header">

      </div>

      <div id="RightBanner">


    </div>


    <div class="registerConteiner" >

    <h1 align="left" style="margin-bottom:0px">Crea una cuenta</h1>
    <h3 align="left" style="margin-top:0px; margin-bottom:0px">Ingresa tus datos</h3>
    <hr style="margin-top:0px"/>

    <h5 align="left" >Correo electrónico</h5>
    <input class="EditText" id="GeneralInput" type="text" name="email" value=""  />

    <h5 align="left" >Nombre de usuario</h5>
    <input class="EditText" id="GeneralInput" type="text" name="userName" value="" />

    <h5 align="left" >Contraseña</h5>
    <input class="EditText" id="GeneralInput" type="password" name="pass" value="" />

    <h5 align="left" >Confirmar contraseña</h5>
    <input class="EditText" id="GeneralInput" type="password" name="confirmPass" />

    <h5 align="left" >Nombre(s)</h5>
    <input class="EditText" id="GeneralInput" type="text" name="name" value="" />

    <h5 align="left" >Primer apellido</h5>
    <input class="EditText" id="GeneralInput" type="text" name="firstName" value="" />

    <h5 align="left" >Segundo apellido</h5>
    <input class="EditText" id="GeneralInput" type="text" name="secondName" value="" />

    <h5 align="left" >Fecha de nacimiento</h5>
    <input class="EditText" id="GeneralInput" type="datetime-local" name="birthday" value="" />

    <h5 align="left" >País</h5>
    <input class="EditText" id="GeneralInput" type="text" name="country" value="" />

    <br/><br/>

    <input type="radio" name="gender" value="M" checked>M
    <input type="radio" name="gender" value="F">F
    <input type="radio" name="gender" value="Other">Otro

    <br/><br/>
    <input type="checkbox" name="terms">Terminos y condiciones

    <br/><br/>

    <input id="GeneralButton" type="submit" name="send"/>

    </div>
  </form>
  </body>
</html>
