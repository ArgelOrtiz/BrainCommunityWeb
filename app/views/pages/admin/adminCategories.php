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
					<th>Estatus</th>
					<th>Acciones</th>
				</tr>
        </thead>
        <tbody>
        <?php foreach($data['categories'] as $category): ?>
          <tr>
						<td><?php echo $category->id; ?></td>
						<td><?php echo $category->title; ?></td>
            <td><?php echo $category->summary; ?></td>

            <?php if($category->status == 1): ?> <td>Activo</td>
            <?php else: ?>                  <td>Deshabilitado</td>
            <?php endif; ?>

						<td>
              <input id="clickMe" id="Editar" class="btn btn-primary btn-sm" type="button" value="Editar" onclick="editModal(<?php echo $category->id; ?>);" />
              <?php if($category->id == 1): ?>
              <form action="<?php echo ROUTE_URL.'/Category/delete/'; ?>" method="POST">
                <input type="hidden" name="category_id" value="<?php echo $category->id; ?>">
                <button type="submit" class="btn btn-danger btn-sm">Deshabilitar</button>
              </form>
              <?php endif; ?>
						</td>

					</tr>
        <?php endforeach ?>
      </tbody>
			</table>
</div>

<!--Create modal-->
<div id="create_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Crear Categoría</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?php echo ROUTE_URL.'/Category/create/'; ?>" method="POST">
        <label>Nombre Categoria</label><br>
        <input style="width:100%" type="text" name="title" id="title" class="form_control" width><br>
        <label>Descripcion</label><br>
        <input style="width:100%" type="text" name="summary" id="summary" class="form_control"><br>
        <label>Prioridad</label><br>
        <input style="width:100%" type="text" name="priority" id="priority" class="form_control"><br><br><br>
        <input type="submit" class="btn btn-info" value="Crear">
      </form>
      </div>
      <div class="modal-footer">
      <button float:left; type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--Create modal-->

<!--Edit modal-->
<?php foreach($data['categories'] as $category): ?>
<div id="myModal<?php echo $category->id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h4>Editar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?php echo ROUTE_URL.'/Category/edit/'; ?>" method="POST">
        <input type="hidden" name="category_id" value="<?php echo $category->id; ?>">
        <label>Nombre Categoria</label><br>
        <input style="width:100%" type="text" name="title" id="title" class="form_control" value="<?php echo $category->title; ?>"><br>
        <label>Descripcion</label><br>
        <input style="width:100%" type="text" name="summary" id="summary" class="form_control" value="<?php echo $category->summary; ?>"><br>
        <label>Prioridad</label><br>
        <input style="width:100%" type="text" name="priority" id="priority" class="form_control" value="<?php echo $category->priority; ?>"><br>
        <input type="submit" class="btn btn-info float-right" value="Actualizar">
      </form>
      </div>
      <div class="modal-footer">
        <button float:left; type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
<!--Edit modal-->

<script type="text/javascript">
  $(document).ready( function () {
    $('#category_table').DataTable();
  } );

  function createModal(){
    $("#create_modal").modal();
  }

  function editModal(id){
    $("#myModal" + id).modal();
  }

</script>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
