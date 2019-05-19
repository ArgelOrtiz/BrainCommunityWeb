<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<link rel="stylesheet" href="BrainCommunity/public/style/editar.css">
</script>
<div class="admin-content">

  <div class="title-content">
    <h3>Usuarios</h3>
  </div>

  <div class="row-content">
			<h4>Lista de usuarios</h4>
			<hr/>
      <div align = center>
            <button type="button" class = "btn btn-success btn-lg">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"> Crear Usuario</span>
              </button>
          </div>
      </div>
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
          <th>Id</th>
					<th>Username</th>
					<th>Nombres</th>
          <th>Apellidos</th>
          <th>Rol</th>
					<th>Estatus</th>
          <th>Acciones</th>
				</tr>
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
              <form action=""method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
  							<button type="button" id="Editar" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                  Editar</button>
              </form>
              <?php if($user->status == 1): ?>
              <form action="<?php echo ROUTE_URL.'/User/delete/'; ?>" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
  							<button type="submit" class="btn btn-danger btn-sm">Deshabilitar</button>
              </form>
            <?php endif; ?>
						</td>

					</tr>
        <?php endforeach ?>

			</table>
      <!--MODAL-->
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >
    <!--MODAL_CONTENT-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!--CONTENIDO-->
        <label>Nombre</label><br>
      <input style="width:100%" type="text"name="nombre" id="first_name"class="form_control" width><br>
      <label>Apellido Materno</label><br>
    <input style="width:100%" type="text"name="apellidoM" id="middle_name"class="form_control"><br>
    <label>Apellido Paterno</label><br>
  <input style="width:100%" type="text"name="apellidoP" id="last_name"class="form_control"><br>
  <label>Fecha de Nacimiento</label><br>
<input style="width:100%" type="text"name="nac" id="birthday"class="form_control"><br>
<label>Status</label><br>
<input style="width:100%" type="text"name="sta" id="status"class="form_control"><br>
<label>Pais</label><br>
<input style="width:100%" type="text"name="pais" id="country"class="form_control"><br>
<label>Genero</label><br>
<input style="width:100%" type="text"name="genero" id="gender"class="form_control"><br>
<label>Rol</label><br>
<input style="width:100%" type="text"name="rol" id="role"class="form_control"><br><br>
<button type="submit" class="btn btn-info float-right" data-dismiss="modal">Enviar</button>
    <!--FIN-->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
<!--FIN MODEL-->
  </div>
</div>
			</div>
  </div>
</div>
<!--ParteMenu-->

<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
