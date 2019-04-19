<?php  require ROUTE_APP.'/views/inc/header.php';?>
  <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/profile.css"/>

    <h1>Informacion del usuario</h1>

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
                <input type="text" class="form-control form-control-lg"  name="name" value="<?php echo $_SESSION['last_name']; ?>">
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
              <input type="text" class="form-control form-control-lg"  name="name" value="<?php echo $_SESSION['country']; ?>">
              <br><br>
              <input type="submit" class="form-control form-control-lg save" value="Guardar">
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
              <input type="text" class="form-control form-control-lg"  name="name" value="<?php echo $_SESSION['gender']; ?>">
              <br><br>
              <input type="submit" class="form-control form-control-lg save" value="Guardar">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

    <table>
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
            echo $_SESSION['gender'];
          }else{
            echo "Vacío";
          } ?>
        </td>
        <td class="editRow"> <button class="form-control form-control-lg editButton" type="button" data-toggle="modal" data-target="#genderModal">Editar</button> </td>
      </tr>
    </table>
