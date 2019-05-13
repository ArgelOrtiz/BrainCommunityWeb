<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
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

            <?php if($user->status = 1): ?> <td>Activo</td>
            <?php else: ?>                  <td>Deshabilitado</td>
            <?php endif; ?>

						<td>
              <form action="<?php echo ROUTE_URL.'/User/edit/'; ?>" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
  							<button type="submit" class="btn btn-primary btn-sm">Editar</button>
              </form>
              <form action="<?php echo ROUTE_URL.'/User/delete/'; ?>" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
  							<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </form>
						</td>

					</tr>
        <?php endforeach ?>

			</table>
			</div>
  </div>
</div>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
