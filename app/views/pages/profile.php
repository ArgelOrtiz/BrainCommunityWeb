<?php  require ROUTE_APP.'/views/inc/header.php';?>
  <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/profile.css"/>

  <?php

  $gender = $_SESSION['gender'];

  switch ($gender) {
    case '0':
      // code...
      $gender = 'Otro';
      break;
    case '1';
      $gender = 'Femenino';
    break;
    case '2':
      $gender = 'Masculino';
      break;
    default:
      // code...
      $gender = 'Otro';
      break;
  }

  if ($data['type'] === 1) {
    // code...
    $message = 'El nombre de usuario ya esta en uso';
  }else if ($data['type'] === 2) {
    // code...
    $message = 'El correo ya esta en uso';
  }

  if ($data['type'] != 0) {
    // code...
    ?>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#errorModal').modal('show');
        });
    </script>
    <?php
  }

   ?>


   <!-- Modal -->
     <div class="modal fade fade" id="errorModal" role="dialog">
       <div class="modal-dialog modal-sm">
         <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title">Perfil</h4>
           </div>
           <div class="modal-body">
             <label class="message-reload" ><?php echo $message; ?></label>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default close-modal-button" data-dismiss="modal">Close</button>
           </div>
         </div>
       </div>
     </div>

    <div class="profile-container" >

      <div class="title-row" style=" ">
          <label >Informacion del usuario</label>
      </div>

      <div class="content-profile-row" >

        <!-- username Modal -->
        <div class="modal fade" id="userNameModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Nombre de usuario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <form class="" action="<?php echo ROUTE_URL.'/Profile/editUserName'?>" method="post">

                    <input type="text" class="form-control form-control-lg"  name="username" value="<?php echo $_SESSION['username']; ?>">
                    <br><br>
                    <button class="btn btn-primary" type="submit" name="button" style="width:125px; "> Guardar </button>

                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- email Modal -->
        <div class="modal fade" id="emailModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Correo electronico</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <form class="" action="<?php echo ROUTE_URL.'/Profile/editEmail'?>" method="post">

                    <input type="text" class="form-control form-control-lg"  name="email" value="<?php echo $_SESSION['email']; ?>">
                    <br><br>
                    <button class="btn btn-primary" type="submit" name="button" style="width:125px; "> Guardar </button>

                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>

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
                    <button class="btn btn-primary" type="submit" name="button" style="width:125px; "> Guardar </button>

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
                    <button class="btn btn-primary" type="submit" name="button" style="width:125px; "> Guardar </button>
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
                    <input type="text" class="form-control form-control-lg"  name="last_name" value="<?php echo $_SESSION['last_name']; ?>">
                    <br><br>
                    <button class="btn btn-primary" type="submit" name="button" style="width:125px; "> Guardar </button>
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
                  <form class="" action="<?php echo ROUTE_URL.'/Profile/editCountry'?>" method="post">
                    <input type="text" class="form-control form-control-lg"  name="country" value="<?php echo $_SESSION['country']; ?>">
                    <br><br>
                    <button class="btn btn-primary" type="submit" name="button" style="width:125px; "> Guardar </button>
                  </form>
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
                  <form class="" action="<?php echo ROUTE_URL.'/Profile/editGender'?>" method="post">
                    <select class=" form-control  " name="gender" value="<?php echo $gender; ?>">
                      <option value="Other">Otro</option>
                      <option value="F">Femenino</option>
                      <option value="M">Masculino</option>
                    </select>
                    <br><br>
                    <button class="btn btn-primary" type="submit" name="button" style="width:125px; "> Guardar </button>
                  </form>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>



        <table class="table table-dark profile-table">
          <tr>
            <th>Nombre de usuario</th>
            <td> <?php echo $_SESSION['username']; ?> </td>
            <td class="editRow"> <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#userNameModal"> <li class="glyphicon glyphicon-edit"></li> </button> </td>
          </tr>
          <tr>
            <th>Correo electronico</th>
            <td> <?php echo $_SESSION['email']; ?> </td>
            <td class="editRow"> <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#emailModal"><li class="glyphicon glyphicon-edit"></li></button> </td>
          </tr>
          <tr>
            <th>Nombre</th>
            <td> <?php echo $_SESSION['first_name']; ?> </td>
            <td class="editRow"> <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#nameModal"><li class="glyphicon glyphicon-edit"></li></button> </td>
          </tr>
          <tr>
            <th>Apellido paterno</th>
            <td> <?php echo $_SESSION['middle_name']; ?> </td>
            <td class="editRow"> <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#middleModal"><li class="glyphicon glyphicon-edit"></li></button> </td>
          </tr>
          <tr>
            <th>Apellido materno</th>
            <td><?php echo $_SESSION['last_name']; ?></td>
            <td class="editRow"> <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#lastModal"><li class="glyphicon glyphicon-edit"></li></button> </td>
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
            <td class="editRow"> <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#countryModal"><li class="glyphicon glyphicon-edit"></li></button> </td>
          </tr>
          <tr>
            <th>Genero</th>
            <td>
              <?php
              if ($_SESSION['gender']) {
                // code...
                echo $gender;
              }else{
                echo "Vacío";
              } ?>
            </td>
            <td class="editRow"> <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#genderModal"><li class="glyphicon glyphicon-edit"></li></button> </td>
          </tr>
        </table>

      </div>



      <div class="experience-row" >

        <table class="table table-dark profile-table table-striped">

          <thead>
            <tr>
              <th colspan="5">
                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#newExperienceModal" name="button"> <li class="glyphicon glyphicon-plus"></li> </button>
              </th>
            </tr>
            <tr>
              <th>
                <label for="name">Nombre</label>
              </th>
              <th>Descripcion</th>
              <th style="display:flex; justify-content: flex-end;">Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php

            if ($data['experience'] != null) {
              // code...
              foreach ($data['experience'] as $experience) {
                // code...
                ?>
                <tr>
                  <td><?php echo $experience->name; ?></td>
                  <td><?php echo $experience->summary; ?></td>
                  <td style="display:flex; justify-content: flex-end;">
                    <button class="btn btn-info" type="button" data-toggle="modal" data-target="#experienceModal<?php echo $experience->name; ?>" name="button"><li class="glyphicon glyphicon-eye-open"></li></button>
                    <button class="btn btn-danger" type="button"data-toggle="modal" data-target="#deleteExperienceModal"> <li class="glyphicon glyphicon-trash"></li> </button>
                  </td>
                </tr>

                <!-- view experience Modal -->
                <div class="modal fade" id="experienceModal<?php echo $experience->name; ?>" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Genero</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group data-experience-row">

                          <label >Nombre:</label>
                          <label><?php echo $experience->name; ?></label>
                          <br>
                          <label>Descripcion:</label>
                          <label><?php echo $experience->summary; ?></label>
                          <br>
                          <label>Extra:</label>
                          <label><?php echo $experience->extra; ?></label>
                          <br>
                          <label>Fecha de inicio:</label>
                          <label ><?php echo $experience->start_date; ?></label>
                          <br>
                          <label>  Fecha de fin:</label>
                          <label><?php echo $experience->end_date; ?></label>

                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- delete experience Modal -->
                <div class="modal fade" id="deleteExperienceModal" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">experiencia</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">

                        <form class="" action="<?php echo ROUTE_URL.'/Profile/deleteExperience'?>" method="post">
                          <div class="form-group data-experience-row">
                            <input type="hidden" name="id" value="<?php echo $experience->id; ?>">
                            <label >Estas seguro de que desceas eliminar la experiencia "<?php echo $experience->name;?>" </label>
                            <button class="btn btn-warning" type="submit" style="width:25%;">Eliminar</button>
                          </div>
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <?PHP
              }
            }else {
              // code...
              ?>
              <td>Sin datos</td>
              <td>Sin datos</td>
              <td>Sin datos</td>
              <?PHP
            }

             ?>

          </tbody>
        </table>

      </div>

      <div class="modal fade" id="newExperienceModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Genero</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

              <form class="" action="<?php echo ROUTE_URL.'/Profile/createExperience'?>" method="post">

                <div class="form-group data-experience-row" >
                  <div class="title-row">
                    <label>Nueva experiencia</label>
                  </div>

                  <div class="content-experience-row">
                    <label>Tipo de experiencia</label>
                    <select class="form-control" name="clasification">
                      <?php foreach ($data['clasification'] as $clasification): ?>
                        <option value="<?php echo $clasification->id;  ?>"><?php echo $clasification->type; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>

                  <div class="content-experience-row">
                    <label>Nombre</label>
                    <input  class="form-control" type="text" name="name" value="">
                  </div>

                  <div class="content-experience-row">
                    <label>Descripcion</label>
                    <input  class="form-control" type="text" name="summary" value="">
                  </div>

                  <div class="content-experience-row">
                    <label>Extras</label>
                    <textarea  class="form-control" name="extra" value=""></textarea>
                  </div>

                  <div class="content-experience-row">
                    <label>Fecha de inicio</label>
                    <input  class="form-control" type="date" name="start_date" value="">
                  </div>

                  <div class="content-experience-row">
                    <label>Fecha de fin</label>
                    <input class="form-control" type="date" name="end_date" value="">
                  </div>

                  <div class="content-experience-row">
                    <button class="btn btn-primary" type="submit" name="button" style="width:125px; "> Guardar </button>
                  </div>

                </div>

              </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>




    </div>
