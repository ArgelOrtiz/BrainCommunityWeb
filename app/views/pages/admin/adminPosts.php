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
			<table class="table table-striped table-hover">
				<tr>
          <th>Id</th>
					<th>Título</th>
					<th>Resumen</th>
					<th>Acciones</th>
				</tr>
        <?php foreach($data['posts'] as $post): ?>
          <tr>
						<td><?php echo $post->id; ?></td>
						<td><?php echo $post->title; ?></td>
						<td><?php echo $post->summary; ?></td>

						<td>
              <form action="<?php echo ROUTE_URL.'/Post/edit/'; ?>" method="POST">
                <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
  							<button type="button" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#myModal">Editar</button>
              </form>
              <form action="<?php echo ROUTE_URL.'/Post/delete/'; ?>" method="POST">
                <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
  							<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </form>
						</td>

					</tr>
        <?php endforeach ?>

			</table>
      <!--MODAL-->
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >
    <!--MODAL_CONTENT-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar</h4>
      </div>
  <div class="modal-body">
        <!--CONTENIDO-->
      <label>Nombre</label><br>
      <input style="width:100%" type="text"name="nombreC" id="title"class="form_control" width><br>
      <label>Descripcion</label><br>
      <input style="width:100%" type="text"name="apellidoM" id="summary"class="form_control"><br>
      <label>Fecha de Creacion</label><br>
      <input style="width:100%" type="text"name="apellidoP" id="create_date"class="form_control"><br>
      <label>Ultima Actualizacion</label><br>
      <input style="width:100%" type="text"name="nac" id="priority"class="form_control"><br>
      <label>Comentarios</label><br>
      <input style="width:100%" type="text"name="nac" id="priority"class="form_control"><br>
      <label>Numero de Visitas</label><br>
      <input style="width:100%" type="text"name="nac" id="priority"class="form_control"><br>
      <label>Prioridad</label><br>
      <input style="width:100%" type="text"name="nac" id="priority"class="form_control"><br>
      <label>Estatus</label><br>
      <input style="width:100%" type="text"name="nac" id="priority"class="form_control"><br>
      <button float:right; type="submit" class="btn btn-info" data-dismiss="modal">Enviar</button>

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

<!--MODAL-AGREGAR-->
<<<<<<< HEAD
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
          <form class="" action="" method="post">
            <select class="form-control" name="category">
              <?php foreach($data['categories'] as $category): ?>
                <option value="<?php echo $category->id; ?>"> <?php echo $category->title; ?></option>
              <?php endforeach ?>
            </select>
      </div>

      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">Seleccionar
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
=======
  <div id="myModal1" class="modal fade" role="dialog">
<div class="modal-dialog" >
<!--MODAL_CONTENT-->
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Agregar Post</h4>
</div>
<div class="modal-body">
  <!--CONTENIDO-->
  <div class="post_categoria">
      <form class="" action="" method="post">
        <select class="form-control" name="category">
          <?php foreach($data['categories'] as $category): ?>
            <option value="<?php echo $category->id; ?>"> <?php echo $category->title; ?></option>
          <?php endforeach ?>
        </select><br><br><br>
  </div>
    <button type="submit" src = "BrainCommunityWeb/app/views/pages/admin/adminNewPost" class="btn btn-info">Seleccionar
    </button>
    </form>
  </div>
<!--FIN-->
</div>
<div class="modal-footer">
  <button float:left; type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
</div>
</div>
<!--FIN MODEL-->
</div>
>>>>>>> 35b8d2760975a9618b5f54c884133a100d4df570
</div>
</div>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
