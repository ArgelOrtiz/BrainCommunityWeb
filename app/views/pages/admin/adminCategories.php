<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<div class="admin-content">

  <div class="title-content">
    <h3>Categorias</h3>
  </div>
  <div class="row-content">
			<h4>Lista de categorias</h4>
			<hr/>
      <div align = right>
        <button type="button" class = "btn btn-success btn-sm" onclick="createModal();">Crear Categoría</button>
      </div>

			<table id="category_table" class="table table-hover">
        <thead>
				<tr>
          <th>Id</th>
					<th>Título</th>
					<th>Resumen</th>
					<th>Acciones</th>
				</tr>
        </thead>
        <tbody>
        <?php foreach($data['categories'] as $category): ?>
          <tr>
						<td><?php echo $category->id; ?></td>
						<td><?php echo $category->title; ?></td>
            <td><?php echo $category->summary; ?></td>

						<td>
              <form action="<?php echo ROUTE_URL.'/Category/edit/'; ?>" method="POST">
                <input type="hidden" name="category_id" value="<?php echo $category->id; ?>">
  							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Editar</button>
              </form>
              <form action="<?php echo ROUTE_URL.'/Category/delete/'; ?>" method="POST">
                <input type="hidden" name="category_id" value="<?php echo $category->id; ?>">
  							<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </form>
						</td>

					</tr>
        <?php endforeach ?>
      </tbody>
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
        <label>Nombre Categoria</label><br>
      <input style="width:100%" type="text"name="nombreC" id="title"class="form_control" width><br>
      <label>Descripcion</label><br>
    <input style="width:100%" type="text"name="apellidoM" id="summary"class="form_control"><br>
    <label>Fecha de Creacion</label><br>
  <input style="width:100%" type="text"name="apellidoP" id="create_date"class="form_control"><br>
  <label>Prioridad</label><br>
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

<!--MODAL-->
<div id="crear" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg" >
<!--MODAL_CONTENT-->
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Editar</h4>
</div>
<div class="modal-body">
  <!--CONTENIDO-->
<label>Nombre Categoria</label><br>
<input style="width:100%" type="text"name="nombreC" id="title"class="form_control" width><br>
<label>Descripcion</label><br>
<input style="width:100%" type="text"name="apellidoM" id="summary"class="form_control"><br>
<label>Fecha de Creacion</label><br>
<input style="width:100%" type="text"name="apellidoP" id="create_date"class="form_control"><br>
<label>Prioridad</label><br>
<input style="width:100%" type="text"name="nac" id="priority"class="form_control"><br><br><br>
<button float:right; type="submit" class="btn btn-info" data-dismiss="modal">Crear</button>
<!--FIN-->
</div>
<div class="modal-footer">
<button float:left; type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
</div>
</div>
<!--FIN MODEL-->
</div>
</div>

<script type="text/javascript">
  $(document).ready( function () {
    $('#category_table').DataTable();
  } );

  function createModal(){
    $("#crear").modal();
  }
</script>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
