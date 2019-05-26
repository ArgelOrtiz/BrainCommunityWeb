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


<div class="user-main-container" >

  <div class="profile-user-container" >

    <div class="user-content" >

      <form class="row-content" action="http://braincommunity.net/Post/viewPost?id=".<?php echo '37'; ?>>
        <button class=" btn btn-info" type="submit" name="button"> <a class="glyphicon glyphicon-arrow-left" style="color:white"></a> Regresar al la publicacion</button>
      </form>

      <div class="title-content">
        <label><?php echo $user->username; ?></label>
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

      <form class="row-content" action="<?php echo ROUTE_URL.'/Profile/setPoint';?>" method="post">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <input type="hidden" name="username" value="<?php echo $user->username; ?>">
        <button class=" btn btn-success" type="submit" name="button">+1 Punto</button>
      </form>

      <form class="row-content">
        <button class="disabled btn btn-danger" type="button" name="button">Reportar</button>
      </form>

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
