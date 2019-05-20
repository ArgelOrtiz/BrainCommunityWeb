<?php  require ROUTE_APP.'/views/inc/header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/post.css"/>

<div class="new-post-container">

  <div class="post-container">

    <div class="title-row">
      <label for="">Mis publicaciones</label>
    </div>

    <div class="post-content-row">
      <table class="table table-dark ">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Fecha</th>
            <th>Acion</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($data['post']) {?>

            <?php foreach ($data['post'] as $post): ?>

              <tr>
                <td><?php echo $post->title; ?></td>
                <td><?php echo $post->create_date; ?></td>
                <td>
                  <button class="btn btn-info" type="button" data-toggle="modal" data-target="#post<?php echo $post->id; ?>" name="button">Ver</button>
                  <button class="disabled btn btn-danger" type="button"data-toggle="modal" data-target="#deleteExperienceModal">Eliminar</button>
                </td>
              </tr>

              <!-- view experience Modal -->
              <div class="modal fade" id="post<?php echo $post->id; ?>" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Publicacion</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group data-experience-row">

                        <label >Titulo:</label>
                        <label><?php echo $post->title; ?></label>
                        <br>
                        <label>Descripcion:</label>
                        <label><?php echo $post->summary; ?></label>
                        <br>
                        <label>Visitas:</label>
                        <label><?php echo $post->visits; ?></label>
                        <br>
                        <label>Comentarios:</label>
                        <label><?php echo $post->comments; ?></label>
                        <br>
                        <label>Fecha:</label>
                        <label ><?php echo $post->create_date; ?></label>
                        <br>
                        <label>Estatus:</label>
                        <label>
                          <?php
                          if ($post->active == 1) {
                            // code...
                            echo "Activo";
                          }else {
                            // code...
                            echo "Oculto";
                          }
                          ?>
                        </label>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>

          <?php }else{ ?>
            <tr>
              <td colspan="5">No tienes publicaciones</td>
            </tr>
          <?php } ?>

        </tbody>
      </table>

    </div>

  </div>

</div>
