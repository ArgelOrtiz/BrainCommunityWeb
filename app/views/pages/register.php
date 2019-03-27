<?php  require ROUTE_APP.'/views/inc/header.php';?>
	<form name="Register"  method="post" action="<?php echo ROUTE_URL.'/Register/check_in'?>" onsubmit="return verifyRegister()">
      <div id="Header">

      </div>

      <div id="RightBanner">


    </div>


    <div class="registerConteiner" >

    <h1 align="left" style="margin-bottom:0px">Crea una cuenta</h1>
    <h3 align="left" style="margin-top:0px; margin-bottom:0px">Ingresa tus datos</h3>
    <hr style="margin-top:0px"/>

    <h5 align="left" >Correo electrónico</h5>
    <input class="EditText" id="GeneralInput" type="text" name="email" value=""  /> <h4 class="errText" id="ValidationEmail">*</h4>

    <h5 align="left" >Nombre de usuario</h5>
    <input class="EditText" id="GeneralInput" type="text" name="username" value="" /> <h4 class="errText" id="ValidationUserName">*</h4>

    <h5 align="left" >Contraseña</h5>
    <input class="EditText" id="GeneralInput" type="password" name="password" value="" /> <h4 class="errText" id="ValidationPass">*</h4>

    <h5 align="left" >Confirmar contraseña</h5>
    <input class="EditText" id="GeneralInput" type="password" name="confirmPass" /> <h4 class="errText" id="ValidationConfirmPass">*</h4>

    <h5 align="left" >Nombre(s)</h5>
    <input class="EditText" id="GeneralInput" type="text" name="name" value="" /> <h4 class="errText" id="ValidationName">*</h4>

    <h5 align="left" >Primer apellido</h5>
    <input class="EditText" id="GeneralInput" type="text" name="firstName" value="" /> <h4 class="errText" id="ValidationFirstName">*</h4>

    <h5 align="left" >Segundo apellido</h5>
    <input class="EditText" id="GeneralInput" type="text" name="secondName" value="" /> <h4 class="errText" id="ValidationSecondName">*</h4>

    <h5 align="left" >Fecha de nacimiento</h5>
    <input class="EditText" id="GeneralInput" type="date" name="birthday" value="" /> <h4 class="errText" id="ValidationBirthdat">*</h4>

    <h5 align="left" >País</h5>
    <input class="EditText" id="GeneralInput" type="text" name="country" value="" />

    <br/><br/>

    <input type="radio" name="gender" value="M">M
    <input type="radio" name="gender" value="F">F
    <input type="radio" name="gender" value="Other" checked>Otro

    <br/><br/>
    <input type="checkbox" name="terms">Terminos y condiciones <h4 class="errText" id="ValidationTerms">*</h4>

    <br/><br/>

    <input id="GeneralButton" type="submit" name="send"/>

    </div>
  </form>
﻿<?php  require ROUTE_APP.'/views/inc/footer.php';?>
