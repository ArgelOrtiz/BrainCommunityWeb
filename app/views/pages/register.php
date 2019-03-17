<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Brain Community</title>

    <style>
    #EditText{

      float:left;
      width:40%;
    }
    </style>

    <link rel="stylesheet" type="text/css" href="..\Style\General.css"

  </head>
  <body >
    <form>

      <div id="Header">

      </div>

      <div id="RightBanner">


    </div>


    <div Style=" width:35%; height:70%;
    top:20%;
    right:45%;
    position:absolute;
    text-align:left;
    color:#000000;
    font-size: 15px;">

    <h1 align="left" style="margin-bottom:0px">Crea una cuenta</h1>
    <h3 align="left" style="margin-top:0px; margin-bottom:0px">Ingresa tus datos</h3>
    <hr style="margin-top:0px"/>

    <h5 align="left" >Correo electrónico</h5>
    <input id="GeneralInput" type="text" name="email" value=""  />

    <h5 align="left" >Nombre de usuario</h5>
    <input id="GeneralInput" type="text" name="userName" value="" />

    <h5 align="left" >Contraseña</h5>
    <input id="GeneralInput" type="password" name="pass" value="" />

    <h5 align="left" >Confirmar contraseña</h5>
    <input id="GeneralInput" type="password" name="confirmPass" />

    <h5 align="left" >Nombre(s)</h5>
    <input id="GeneralInput" type="text" name="name" value="" />

    <h5 align="left" >Primer apellido</h5>
    <input id="GeneralInput" type="text" name="firstName" value="" />

    <h5 align="left" >Segundo apellido</h5>
    <input id="GeneralInput" type="text" name="secondName" value="" />

    <h5 align="left" >Fecha de nacimiento</h5>
    <input id="GeneralInput" type="datetime-local" name="birthday" value="" />

    <h5 align="left" >País</h5>
    <input id="GeneralInput" type="text" name="country" value="" />

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
