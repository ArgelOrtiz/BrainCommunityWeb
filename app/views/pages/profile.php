<?php  require ROUTE_APP.'/views/inc/header.php';?>
  <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/profile.css"/>

    <h1>Informacion del usuario</h1>

    <?php session_start(); ?>

    <table>
      <tr>
        <th>Nombre de usuario</th>
        <td> <?php echo $_SESSION['username']; ?> </td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>Correo electronico</th>
        <td> <?php echo $_SESSION['email']; ?> </td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>Nombre</th>
        <td> <?php echo $_SESSION['first_name']; ?> </td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>Apellido paterno</th>
        <td> <?php echo $_SESSION['middle_name']; ?> </td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>Apellido materno</th>
        <td><?php echo $_SESSION['last_name']; ?></td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>País</th>
        <td><?php echo $_SESSION['country']; ?></td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>Genero</th>
        <td> <?php echo $_SESSION['gender']; ?> </td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
    </table>
