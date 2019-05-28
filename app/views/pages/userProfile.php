<?php  require ROUTE_APP.'/views/inc/header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/profile.css"/>

<?php
  $user       = $data['user'];
  $experience = $data['experience'];

  switch ( $user->gender) {
    case 0:
      // code...
      $gender = 'No especificado';
      break;
    case 1:
      $gender = 'Femenino';
      break;
    case 2:
      $gender = 'Masculino';
      break;
    default:
      $gender = 'vacio';
      break;
  }
 ?>

 <!-- Modal report -->
  <div class="modal fade" id="reportModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Reportar a <?php echo $user->username; ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form class="modal-body issue-modal" action="<?php echo ROUTE_URL.'/Issue/create';?>" method="post" >

          <div class="title-content">
            <label for="">Describa la razon por la cual descea reportar a este usuario</label>
          </div>

          <div class="content-modal form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" name="title"></input>
          </div>

          <div class="content-modal form-group">
            <label for="">Descripcion</label>
            <textarea class="form-control"  name="summary" rows="8" cols="80"></textarea>
          </div>

          <div class="content-modal">
              <button class="btn btn-warning" type="submit" >Reportar</button>
          </div>

          <div class="content-modal">
            <?php if ($_SESSION): ?>
              <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
            <?php endif; ?>
            <input type="hidden" name="reported" value="<?php echo $user->id; ?>">
          </div>

        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="user-main-container" >

  <div class="profile-user-container" >

    <div class="user-content" >

      <div class="title-content" style="background:#00BFFF; border-radius:10px;">
        <label style="padding:5px; color:white;"><?php echo $user->username; ?></label>
      </div>

      <div class="row-content">
        <label>Nombre:</label>
        <label > <?php echo $user->first_name; ?> </label>
      </div>

      <div class="row-content">
        <label>Apellidos:</label>
        <label > <?php echo $user->middle_name.' '.$user->last_name;?> </label>
      </div>

      <div class="row-content">
        <label>País:</label>
        <label ><?php echo $user->country; ?></label>
      </div>

      <div class="row-content">
        <label>Genero:</label>
        <label ><?php echo $gender; ?></label>
      </div>

      <div class="row-content">
        <button class="btn btn-danger
        <?php if ($data['issue'] == 0): ?>
          disabled
        <?php endif; ?>
        " data-toggle="modal" data-target="#reportModal" type="submit" name="button">Reportar</button>
      </div>

    </div>

    <div class="user-content" style="flex-grow: 8">
      <table class="table table-dark user-table table-striped" >
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Inicio - Fin</th>
          </tr>
        </thead>

        <tbody>

          <?php foreach ($experience as $exp): ?>

            <tr>
              <td> <?php echo $exp->name; ?> </td>
              <td> <?php echo $exp->summary; ?> </td>
              <td> <?php echo $exp->start_date.' / '.$exp->end_date; ?> </td>
            </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </div>

  </div>

</div>
