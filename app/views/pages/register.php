<?php  require ROUTE_APP.'/views/inc/header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/register.css"/>


<?php
$error_code = 'error 404: code not found';

if (isset($data)) {
  // code...

  if ($data['type'] === '0') {
    // code...
    $error_code = 'error er-002';

  }elseif ($data['type'] === '1' || $data['type'] === '2') {
    // code...
    ?>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#myModal').modal('show');
        });
    </script>
    <?php

    $error_code = 'error er-003';

    $email = $data['email'];
    $username = $data['username'];
    $name = $data['name'];
    $first_name = $data['middle_name'];
    $second_name = $data['last_name'];
    $birthday = $data['birthday'];

    if (isset($data['country'])) {
      // code...
      $country = $data['country'];
    }else {
      // code...
      $country = "";
    }

    if (isset($data['gender'])) {
      // code...
      $gender = $data['gender'];

      switch ($gender) {
        case 2:
          // code...
          $gender = 'Masculino';
          break;
        case 1:
            // code...
            $gender = 'Femenino';
            break;
        default:
          // code...
          $gender = 'Otherl';
          break;
      }

    }else {
      // code...
      $gender = 'Other';
    }

    switch ($data['type']) {
      case '2':
        // code...
        $error_code = 'El correo '.$email.' ya ha esta en uso';
        break;
      case '1':
        $error_code = 'El nombre de usuario '.$username.' ya esta en uso';
        break;
      default:
        // code...
        $error_code = 'error 404: code not found';
        break;
    }

  }

}

?>



<!-- Modal -->
  <div class="modal fade fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registro</h4>
        </div>
        <div class="modal-body">
          <label class="message-reload" id="error-email" ><?php echo $error_code; ?></label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close-modal-button" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<form class="Register" action="<?php echo ROUTE_URL.'/Register/checkin'?>" method="post" onsubmit="return registerVerification()">
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
            <label class="error-text" id="ValidationEmail">*</label>
          </div>

        	<input class=" form-control " id="email"   type="text" name="email" value="<?php echo $email; ?>" />
        </div>
        <!-- username -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Nombre de usuario</label>
            <label class="error-text" id="ValidationUserName">*</label>
          </div>

        	<input class="form-control " id="username"   type="text" name="username"  value="<?php echo $username; ?>" />
        </div>
        <!-- password -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Contraseña</label>
            <label class="error-text" id="ValidationPass">*</label>
          </div>

        	<input class="form-control " id="password"   type="password" name="password"  />
        </div>

        <!-- Confirm password -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Confirmar Contraseña</label>
            <label class="error-text" id="ValidationConfirmPass">*</label>
          </div>

        	<input class="form-control " id="confirmPass"   type="password" name="confirmPass"  />
        </div>

        <!-- name -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Nombre(s)</label>
            <label class="error-text" id="ValidationName">*</label>
          </div>

        	<input class=" form-control " id="name"  type="text" name="name"  value="<?php echo $name; ?>"/>
        </div>

        <!-- first name -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Primer apellido</label>
            <label class="error-text" id="ValidationFirstName">*</label>
          </div>

        	<input class=" form-control " id="firstName"  type="text" name="firstName"  value="<?php echo $first_name; ?>"/>
        </div>

        <!-- last name -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Segundo apellido</label>
            <label class="error-text" id="ValidationSecondName">*</label>
          </div>

        	<input class=" form-control " id="secondName"  type="text" name="secondName" value="<?php echo $second_name; ?>" />
        </div>

        <!-- birthday -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Fecha de nacimiento</label>
            <label class="error-text" id="ValidationBirthday">*</label>
          </div>

        	<input class=" form-control " id="birthday" type="date"  name="birthday" value="<?php echo $birthday; ?>" />
        </div>

        <!-- country -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >País</label>
          </div>

        	<input class=" form-control " id="country"  type="text" name="country" value="<?php echo $country; ?>"  />
        </div>

        <!-- gender -->
        <div class="row-content form-group  ">
          <div class="title-content-row">
            <label >Genero</label>
          </div>
          <select class=" form-control  " name="gender" value="<?php echo $gender; ?>">
            <option value="Other">Otro</option>
            <option value="F">Femenino</option>
            <option value="M">Masculino</option>
          </select>

        </div>


        <!-- send -->
        <div class="row-content form-group  ">

          <input class="btn btn-primary" type="submit" name="send"/>

        </div>

      </div>

  </div>
</form>
<script type="text/javascript" src="<?php echo ROUTE_URL?>/js/register.js"></script>
﻿<?php  require ROUTE_APP.'/views/inc/footer.php';?>
