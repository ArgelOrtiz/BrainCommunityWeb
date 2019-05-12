<?php  require ROUTE_APP.'/views/inc/header.php';?>
  <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/profile.css"/>

  <?php

  $gender = $_SESSION['gender'];

  switch ($gender) {
    case '0':
      // code...
      $gender = 'Otro';
      break;
    case '1';
      $gender = 'Femenino';
    break;
    case '2':
      $gender = 'Masculino';
      break;
    default:
      // code...
      $gender = 'Otro';
      break;
  }

   ?>

    <div class="profile-container" style=" display:flex; flex-direction:column;">

      <div class="title-row" style=" color:#00BFFF; display: flex; align-items:center; justify-content: center; margin-bottom:15px; margin-top:15px;">
          <label style="font-size:35px;">Informacion del usuario</label>
      </div>

      <div class="content-profile-row" style=" display:flex; align-items:center; justify-content: center; margin-bottom:15px;">

        <!-- Name Modal -->
        <div class="modal fade" id="nameModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Nombre</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <form class="" action="<?php echo ROUTE_URL.'/Profile/editName'?>" method="post">

                    <input type="text" class="form-control form-control-lg"  name="name" value="<?php echo $_SESSION['first_name']; ?>">
                    <br><br>
                    <input type="submit" class="form-control form-control-lg save" value="Guardar">

                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- middle Name Modal -->
        <div class="modal fade" id="middleModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Apellido paterno</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <form class="" action="<?php echo ROUTE_URL.'/Profile/editMiddleName'?>" method="post">
                    <input type="text" class="form-control form-control-lg"  name="middle_name" value="<?php echo $_SESSION['middle_name']; ?>">
                    <br><br>
                    <input type="submit" class="form-control form-control-lg save" value="Guardar">
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Last Name Modal -->
        <div class="modal fade" id="lastModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Apellido materno</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <form class="" action="<?php echo ROUTE_URL.'/Profile/editLastName'?>" method="post">
                    <input type="text" class="form-control form-control-lg"  name="last_name" value="<?php echo $_SESSION['last_name']; ?>">
                    <br><br>
                    <input type="submit" class="form-control form-control-lg save" value="Guardar">
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- country Modal -->
        <div class="modal fade" id="countryModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">País</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <form class="" action="<?php echo ROUTE_URL.'/Profile/editCountry'?>" method="post">
                    <input type="text" class="form-control form-control-lg"  name="country" value="<?php echo $_SESSION['country']; ?>">
                    <br><br>
                    <input type="submit" class="form-control form-control-lg save" value="Guardar">
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- gender Modal -->
        <div class="modal fade" id="genderModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Genero</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <form class="" action="<?php echo ROUTE_URL.'/Profile/editGender'?>" method="post">
                    <select class=" form-control  " name="gender" value="<?php echo $gender; ?>">
                      <option value="Other">Otro</option>
                      <option value="F">Femenino</option>
                      <option value="M">Masculino</option>
                    </select>
                    <br><br>
                    <input type="submit" class="form-control form-control-lg save" value="Guardar">
                  </form>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

        <table class="table table-dark profile-table">
          <tr>
            <th>Nombre de usuario</th>
            <td> <?php echo $_SESSION['username']; ?> </td>
            <td class="editRow"> <button class="form-control form-control-lg editButton" type="button" >Editar</button> </td>
          </tr>
          <tr>
            <th>Correo electronico</th>
            <td> <?php echo $_SESSION['email']; ?> </td>
            <td class="editRow"> <button class="form-control form-control-lg editButton" type="button" name="button">Editar</button> </td>
          </tr>
          <tr>
            <th>Nombre</th>
            <td> <?php echo $_SESSION['first_name']; ?> </td>
            <td class="editRow"> <button class="form-control form-control-lg editButton" type="button" data-toggle="modal" data-target="#nameModal">Editar</button> </td>
          </tr>
          <tr>
            <th>Apellido paterno</th>
            <td> <?php echo $_SESSION['middle_name']; ?> </td>
            <td class="editRow"> <button class="form-control form-control-lg editButton" type="button" data-toggle="modal" data-target="#middleModal">Editar</button> </td>
          </tr>
          <tr>
            <th>Apellido materno</th>
            <td><?php echo $_SESSION['last_name']; ?></td>
            <td class="editRow"> <button class="form-control form-control-lg editButton" type="button" data-toggle="modal" data-target="#lastModal">Editar</button> </td>
          </tr>
          <tr>
            <th>País</th>
            <td>
              <?php
              if ($_SESSION['country']) {
                // code...
                echo $_SESSION['country'];
              }else{
                echo "Vacío";
              } ?>
            </td>
            <td class="editRow"> <button class="form-control form-control-lg editButton" type="button" data-toggle="modal" data-target="#countryModal">Editar</button> </td>
          </tr>
          <tr>
            <th>Genero</th>
            <td>
              <?php
              if ($_SESSION['gender']) {
                // code...
                echo $gender;
              }else{
                echo "Vacío";
              } ?>
            </td>
            <td class="editRow"> <button class="form-control form-control-lg editButton" type="button" data-toggle="modal" data-target="#genderModal">Editar</button> </td>
          </tr>
        </table>

      </div>

      <div class="experience-row" style=" display: flex; align-items:center; justify-content: center; ">

        <table class="table table-dark profile-table table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Extra</th>
              <th>Fecha de inicio</th>
              <th>Fecha de fin</th>
            </tr>
          </thead>
          <script type="text/javascript">
            alert(<?php echo $data['experience']; ?>);
          </script>
            <?php

            if ($data['experience'] != null) {
              // code...
              foreach ($data['experience'] as $experience) {
                // code...
                ?>
                <td><?php echo $experience->name; ?></td>
                <td><?php echo $experience->summary; ?></td>
                <td><?php echo $experience->extra; ?></td>
                <td><?php echo $experience->start_date; ?></td>
                <td><?php echo $experience->end_date; ?></td>
                <?PHP
              }
            }else {
              // code...
              ?>
              <td>Sin datos</td>
              <td>Sin datos</td>
              <td>Sin datos</td>
              <td>Sin datos</td>
              <td>Sin datos</td>
              <?PHP
            }

             ?>
          <tbody>

          </tbody>
        </table>

      </div>



    </div>
