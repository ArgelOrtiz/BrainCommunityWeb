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
                  <form class="" action="<?php echo ROUTE_URL.'/Post/viewPost';?>" method="get">
                    <input type="hidden" name="id" value="<?php echo $post->id; ?>">
                    <button class="btn btn-outline-info" type="submit" ><li class="glyphicon glyphicon-eye-open"></li></button>
                    <button class=" btn btn-outline-danger" type="button"data-toggle="modal"  data-target="#deletePost<?php echo $post->id; ?>"><li class="glyphicon glyphicon-trash"></li></button>
                  </form>
                </td>
              </tr>



              <!-- delete post Modal -->
              <div class="modal fade" id="deletePost<?php echo $post->id; ?>" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Publicacion</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                      <form class="" action="<?php echo ROUTE_URL.'/MyPosts/deletePost'?>" method="post">
                        <div class="form-group data-experience-row">
                          <input type="hidden" name="id" value="<?php echo $post->id; ?>">
                          <label >Estas seguro de que desceas eliminar la experiencia "<?php echo $post->title;?>" </label>
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
