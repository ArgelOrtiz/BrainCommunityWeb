<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<div class="admin-content">

  <div class="title-content">
    <h3>Comentarios</h3>
  </div>

  <div class="row-content">
			<h4>Lista de comentarios</h4>
			<hr/>
      <div align = center>
            <button type="button" class = "btn btn-success btn-lg">
              <span class="glyphicon glyphicon-plus" aria-hidden="true">Crear Comentario</span>
              </button>
          </div>
			<div class="table-responsive">
			<table class="table table-striped table-hover table-dark">
				<tr>
          <th>Id</th>
					<th>Título</th>
					<th>Resumen</th>
					<th>Acciones</th>
				</tr>
        <?php foreach($data['comments'] as $comment): ?>
          <tr>
						<td><?php echo $comment->id; ?></td>
						<td><?php echo $comment->title; ?></td>
						<td><?php echo $comment->summary; ?></td>

						<td>
              <form action="<?php echo ROUTE_URL.'/Comment/edit/'; ?>" method="POST">
                <input type="hidden" name="comment_id" value="<?php echo $comment->id; ?>">
  							<button type="button" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#myModal">Editar</button>
              </form>
              <form action="<?php echo ROUTE_URL.'/Comment/delete/'; ?>" method="POST">
                <input type="hidden" name="comment_id" value="<?php echo $comment->id; ?>">
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
        <label>Nombre de usuario</label><br>
      <input style="width:100%" type="text"name="nombre" id="first_name"class="form_control" width><br>
      <label>Descripcion</label><br>
    <input style="width:100%" type="text"name="apellidoM" id="middle_name"class="form_control"><br>
    <label>Fecha de Creacion</label><br>
  <input style="width:100%" type="text"name="apellidoP" id="last_name"class="form_control"><br>
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
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
