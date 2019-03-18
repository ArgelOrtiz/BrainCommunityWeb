<?php  require ROUTE_APP.'/views/inc/header.php';?>
  <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/profile.css"/>


    <h1>Informacion del usuario</h1>

    <table>
      <tr>
        <th>Nombre de usuario</th>
        <td>_username_</td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>Correo electronico</th>
        <td>_email_</td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>Nombre</th>
        <td>_name_</td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>Apellido paterno</th>
        <td>_middle_name_</td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>Apellido materno</th>
        <td>_last_name_</td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
      <tr>
        <th>País</th>
        <td>_country_</td>
        <td class="editRow"> <button class="editProfile" type="button" name="button">Editar</button> </td>
      </tr>
    </table>
