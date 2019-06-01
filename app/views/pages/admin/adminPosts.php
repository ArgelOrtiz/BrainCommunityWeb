<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<div class="admin-content">

  <div class="title-content">
    <h3>Posts</h3>
  </div>

  <div class="row-content">
			<h4>Lista de posts</h4>
			<hr/>
      <div align = center>
            <button type="button" class = "btn btn-success btn-lg" data-toggle="modal" data-target="#myModal1">
              <span class="glyphicon glyphicon-plus">Crear Post</span>
              </button>
          </div>
			<div class="table-responsive">
			<table id="post_table" class="table table-striped table-hover">
        <thead>
        <tr>
          <th>Id</th>
					<th>Título</th>
					<th>Resumen</th>
					<th>Acciones</th>
				</tr>
        </thead>
        <tbody>
        <?php foreach($data['posts'] as $post): ?>
          <tr>
						<td><?php echo $post->id; ?></td>
						<td><?php echo $post->title; ?></td>
						<td><?php echo $post->summary; ?></td>

            <td>
                <input id="clickMe" id="Editar" class="btn btn-primary btn-sm" type="button" value="Editar" onclick="generateModal(<?php echo $post->id ?>);" />
              <?php if($post->status == 1): ?>
              <form action="<?php echo ROUTE_URL.'/AdminPost/delete/'; ?>" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
                <button type="submit" class="btn btn-danger btn-sm">Deshabilitar</button>
              </form>
              <?php endif; ?>
            </td>

					</tr>
        <?php endforeach ?>
        </tbody>
			</table>
      <!--MODAL-->
      <?php foreach ($data['posts'] as $post): ?>

        <div id="myModal<?php echo $post->id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >
    <!--MODAL_CONTENT-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar</h4>
      </div>
  <div class="modal-body">
        <!--CONTENIDO-->
        <form action="<?php echo ROUTE_URL.'/AdminPost/edit/'; ?>" method="POST">
          <input type="hidden" name="post_id" value="<?php echo $post->id;?>">
      <label>Nombre</label><br>
      <input style="width:100%" type="text"name="title" id="title" value="<?php echo $post->title; ?>"class="form_control" width><br>
      <label>Descripcion</label><br>
      <input style="width:100%" type="text"name="summary" id="summary" value="<?php echo $post->summary; ?>" class="form_control"><br>
      <label>Prioridad</label><br>

      <select class="form_control" name="priority" value="<?php echo $post->priority; ?>">
        <option value="2">Alta</option>
        <option value="1">Media</option>
        <option value="0">Baja</option>
      </select><br>
      <label>Estatus</label><br>

      <select class="form_control" name="status" values="<?php echo $post->status; ?>">
        <option value="0">Inactivo</option>
        <option value="1">Activo</option>
      </select>
      <br>
      <input type="submit" class="btn btn-info float-right" value="Actualizar">
        </form>
    <!--FIN-->
  </div>
      <div class="modal-footer">
        <button float:left; type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
<!--FIN MODEL-->
			</div>
  </div>
</div>
<?php endforeach ?>
<!--MODAL-AGREGAR-->
      <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog" >
    <!--MODAL_CONTENT-->
          <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Post</h4>
          </div>
            <div class="modal-body">
      <!--modal categories to new post-->
              <div class="post_categoria">
                <form class="" action="<?php echo ROUTE_URL.'/AdminPost/newPost';?>" method="post">
                  <select class="form-control" name="category">
                    <?php foreach($data['categories'] as $category): ?>
                      <option value="<?php echo $category->id; ?>"> <?php echo $category->title; ?></option>
                    <?php endforeach ?>
                  </select>
              </div>
                <button type="submit" class="btn btn-link">Seleccionar
                </button>
              </form>
          </div>
    <!--FIN-->
    </div>
    <div class="modal-footer">
      <button  type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
    </div>
    </div>
    <!--FIN MODEL-->
    </div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready( function () {
  $('#post_table').DataTable();
} );
function createModal(){
  $("#createModal").modal();
}

function generateModal(id){
  $("#myModal" + id).modal();
}
</script>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
