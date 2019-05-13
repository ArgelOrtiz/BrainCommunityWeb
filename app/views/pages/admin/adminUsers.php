<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<div class="admin-content">

  <div class="title-content">
    <h3>Usuarios</h3>
  </div>

  <div class="row-content">
			<h2>Lista de usuarios</h2>
			<hr/>

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
            <td><?php echo $user->role; ?></td>
            <td><?php echo $user->status; ?></td>
						<td>
							<a href="edit.php?nik='.$row['codigo'].'" class="btn btn-primary btn-sm">Editar</a>
							<a href="index.php?aksi=delete&nik='.$row['codigo'].'" class="btn btn-danger btn-sm">Eliminar</a>
						</td>
					</tr>
        <?php endforeach ?>
			</table>
			</div>
  </div>
</div>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
