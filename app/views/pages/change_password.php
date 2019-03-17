<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Brain Community</title>
  <script type = "text/javascript">
  //<![CDATA[
  	function validateForm(){

      document.getElementById("PasswordMatch").style.visibility = "hidden";
      document.getElementById("ConfirmPassword").style.visibility = "hidden";
      document.getElementById("NewPassword").style.visibility = "hidden";


  	   var password           = document.forms["ChangePassword"]["password"].value;
       var confirmPassword    = document.forms["ChangePassword"]["confirmPassword"].value;

       if (password == "") {
         document.getElementById("NewPassword").style.visibility = "visible";
         return false;
       }

       if (confirmPassword == "") {
         document.getElementById("ConfirmPassword").style.visibility = "visible";
         return false;

       }

       if(password == confirmPassword){
         alert("correct password");
         return true;
       }else{
         document.getElementById("PasswordMatch").style.visibility = "visible";
         return false;
       }
  }
  //]]>
  </script>

  <link rel="stylesheet" type="text/css" href="..\Style\General.css"


  </head>
  <body >
    <form name="ChangePassword" action="Login.html" method="post" onsubmit="return validateForm()">

      <div id="Header">
      </div>

    <div id="LeftBanner">
    </div>

      <div id="CenterBanner" Style=" width:50%; height:50%;
      top:40%;
      left:50%;
      position:absolute;
      text-align:left;
      font-size: 15px;">

        <h1>Recuperar Contraseña</h1>
        <h3>Ingrese la nueva contraseña</h3>

        <h5>Nueva Contraseña</h5>
        <h4 id="NewPassword">Ingrese su nueva contraseña*</h4>
        <input id="GeneralInput" type="password" name="password" value=""/><br>

        <h5>Confirmar contraseña</h5>
        <h4 id="ConfirmPassword">Confirme su contraseña*</h4>
        <input id="GeneralInput" type="password" name = "confirmPassword" value = ""/>
        <br><br>

        <h4 id="PasswordMatch">La contraseña no coincide*</h4>
        <input id="GeneralButton" type="submit" name="Guardar"/>

     </div>

    </form>
  </body>
</html>
