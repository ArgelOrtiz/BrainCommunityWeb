<html>
<head>
  <title>
    Hola
</title>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

  <table id="table_id" class="table table-hover ">
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

<script type="text/javascript">
$(document).ready( function () {
  $('#table_id').DataTable();
} );
</script>
</body>
</html>
