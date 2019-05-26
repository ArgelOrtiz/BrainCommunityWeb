<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>

<div class="admin-content">

  <div class="title-content">
    <h3 id="holis">Usuarios</h3>
  </div>

      <div class="row-content">
    			<h4>Lista de usuarios</h4>
    			<hr/>
          <div align = right>
            <button type="button" class = "btn btn-success btn-sm" onclick="createModal();">Crear Usuario</button>
          </div>
      </div>

      <table id="users_table" class="table table-hover ">
        <thead>
          <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Rol</th>
            <th>Estatus</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data['users'] as $user): ?>
            <tr>
              <td><?php echo $user->id; ?></td>
              <td><?php echo $user->username; ?></td>
              <td><?php echo $user->first_name; ?></td>
              <td><?php echo $user->last_name; ?></td>

              <?php if($user->role == 0): ?>  <td>Administrador</td>
              <?php else: ?>                  <td>Usuario</td>
              <?php endif; ?>

              <?php if($user->status == 1): ?> <td>Activo</td>
              <?php else: ?>                  <td>Deshabilitado</td>
              <?php endif; ?>

              <td>
                  <input id="clickMe" id="Editar" class="btn btn-primary btn-sm" type="button" value="Editar" onclick="generateModal(<?php echo $user->id ?>);" />
                <?php if($user->status == 1): ?>
                <form action="<?php echo ROUTE_URL.'/User/delete/'; ?>" method="POST">
                  <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
                  <button type="submit" class="btn btn-danger btn-sm">Deshabilitar</button>
                </form>
                <?php endif; ?>
              </td>

            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

  </div>
</div>

<div id="createModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >
  <!--MODAL_CONTENT-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Crear Usuario</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <form action="<?php echo ROUTE_URL.'/User/create/'; ?>" method="POST">
        <label >Email</label><br>
        <input style="width:100%" type="text"name="email" id="email"class="form_control"><br>
        <label >Username</label><br>
        <input style="width:100%" type="text"name="username" id="username"class="form_control"><br>
        <label >Contraseña</label><br>
        <input style="width:100%" type="password"name="password" id="password"class="form_control"><br>
        <label >Repetir Contraseña</label><br>
        <input style="width:100%" type="password"name="reppassword" id="reppassword"class="form_control"><br>
        <label >Nombre</label><br>
        <input style="width:100%" type="text"name="nombre" id="first_name"class="form_control" placeholder="Nombre"><br>
        <label>Apellido Materno</label><br>
        <input style="width:100%" type="text"name="apellidoM" id="middle_name"class="form_control" placeholder="Apellido"><br>
        <label>Apellido Paterno</label><br>
        <input style="width:100%" type="text"name="apellidoP" id="last_name"class="form_control" placeholder="Apellido"><br>
        <label>Fecha de Nacimiento</label><br>
        <input style="width:100%" type="text"name="nac" id="birthday"class="form_control" placeholder="aaaa-mm-dd"><br>
        <label>Status</label><br>
        <input type="radio" name="status" id="status" value="1" checked>Habilitado<br>
        <input type="radio" name="status" id="status" value="0">Deshabilitado<br>
        <label>Pais</label><br>
        <input style="width:100%" type="text"name="pais" id="country"class="form_control" placeholder="País"><br>
        <label>Genero</label><br>
        <select class=" form-control" name="genero">
          <option value="Other">Otro</option>
          <option value="F">Femenino</option>
          <option value="M">Masculino</option>
        </select><br>
        <label>Rol</label><br>
        <select class=" form-control" name="rol">
          <option value="0">Administrador</option>
          <option value="1">Usuario</option>
        </select><br>
        <input type="submit" class="btn btn-info float-right" value="Crear">
      </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Cancelar</button>
    </div>
  </div>
  <!--FIN MODEL-->
  </div>
</div>

<!--ParteMenu-->
<!--MODAL-->
<?php foreach($data['users'] as $user): ?>
<div id="myModal<?php echo $user->id ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >
  <!--MODAL_CONTENT-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Editar</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <form action="<?php echo ROUTE_URL.'/User/edit/'; ?>" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $user->id ?>">
        <label >Nombre</label><br>
        <input style="width:100%" type="text"name="nombre" id="first_name"class="form_control" value="<?php echo $user->first_name; ?>"><br>
        <label>Apellido Materno</label><br>
        <input style="width:100%" type="text"name="apellidoM" id="middle_name"class="form_control" value="<?php echo $user->middle_name; ?>"><br>
        <label>Apellido Paterno</label><br>
        <input style="width:100%" type="text"name="apellidoP" id="last_name"class="form_control" value="<?php echo $user->last_name; ?>"><br>
        <label>Fecha de Nacimiento</label><br>
        <input style="width:100%" type="text"name="nac" id="birthday"class="form_control" value="<?php echo $user->birthday; ?>"><br>
        <label>Status</label><br>
        <input type="radio" name="status" id="status" value="1">Habilitado<br>
        <input type="radio" name="status" id="status" value="0">Deshabilitado<br>
        <label>Pais</label><br>
        <input style="width:100%" type="text"name="pais" id="country"class="form_control" value="<?php echo $user->country; ?>"><br>
        <label>Genero</label><br>
        <select class=" form-control" name="genero" value="<?php echo $gender; ?>">
          <option value="Other">Otro</option>
          <option value="F">Femenino</option>
          <option value="M">Masculino</option>
        </select><br>
        <label>Rol</label><br>
        <input style="width:100%" type="text" name="role" id="role" class="form_control" value="<?php echo $user->role; ?>"><br><br>
        <input type="submit" class="btn btn-info float-right" value="Actualizar">
      </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Cancelar</button>
    </div>
  </div>
  <!--FIN MODEL-->
  </div>
</div>
<?php endforeach ?>

<script type="text/javascript">

$(document).ready( function () {
  $('#users_table').DataTable();
} );

  function createModal(){
    $("#createModal").modal();
  }

  function generateModal(id){
    $("#myModal" + id).modal();
  }
</script>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
