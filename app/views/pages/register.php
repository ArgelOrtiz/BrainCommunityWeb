<?php  require ROUTE_APP.'/views/inc/header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/register.css"/>

<form class="" action="<?php echo ROUTE_URL.'/Register/checkin'?>" method="post">
  <div class="register-main-container">
      <div class="register-content">

        <div class="row-content-title">
    					<label >Crea una cuenta</label>
        			<label >Ingresa tus datos</label>
    		</div>
        <!-- email -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Correo electrónico</label>
            <spam class="errText" id="ValidationEmail">*</spam>
          </div>

        	<input class=" form-control "   type="text" name="email" value="" />
        </div>
        <!-- username -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Nombre de usuario</label>
            <spam class="errText" id="ValidationUserName">*</spam>
          </div>

        	<input class="form-control  "   type="text" name="username" value="" />
        </div>
        <!-- password -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Contraseña</label>
            <spam class="errText" id="ValidationPass">*</spam>
          </div>

        	<input class="form-control  "   type="password" name="password"  value="" />
        </div>

        <!-- Confirm password -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Confirmar Contraseña</label>
            <spam class="errText" id="ValidationConfirmPass">*</spam>
          </div>

        	<input class="form-control  "   type="password" name="confirmPass"  value="" />
        </div>

        <!-- name -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Nombre(s)</label>
            <spam class="errText" id="ValidationName">*</spam>
          </div>

        	<input class=" form-control "   type="text" name="name" value="" />
        </div>

        <!-- first name -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Primer apellido</label>
            <spam class="errText" id="ValidationFirstName">*</spam>
          </div>

        	<input class=" form-control "   type="text" name="firstName" value="" />
        </div>

        <!-- last name -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Segundo apellido</label>
            <spam class="errText" id="ValidationSecondName">*</spam>
          </div>

        	<input class=" form-control "   type="text" name="secondName" value="" />
        </div>

        <!-- birthday -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Fecha de nacimiento</label>
            <spam class="errText" id="ValidationBirthdat">*</spam>
          </div>

        	<input class=" form-control "   type="date" name="birthday" value="" />
        </div>

        <!-- country -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >País</label>
          </div>

        	<input class=" form-control "   type="text" name="country" value="" />
        </div>

        <!-- gender -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Genero</label>
          </div>
          <select class=" " name="gender">
            <option value="F">Femenino</option>
            <option value="M">Masculino</option>
            <option value="Other">Otro</option>
          </select>

        </div>

        <!-- terms -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Terminos y condiciones</label>
          </div>

          <input class="  checkbox"   type="checkbox" name="terms" value="" />

        </div>


        <!-- send -->
        <div class="row-content form-group  ">

          <input id="GeneralButton" type="submit" name="send"/>

        </div>

      </div>

  </div>
</form>


﻿<?php  require ROUTE_APP.'/views/inc/footer.php';?>
