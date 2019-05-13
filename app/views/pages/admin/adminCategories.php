<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<div class="admin-content">

  <div class="title-content">
    <h3>Categorias</h3>
  </div>
  <div class="row-content">
			<h4>Lista de categorias</h4>
			<hr/>
      <div align = center>
            <button type="button" class = "btn btn-success btn-lg">
              <span class="glyphicon glyphicon-plus" aria-hidden="true">Nueva Categoria</span>
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
        <?php foreach($data['categories'] as $category): ?>
          <tr>
						<td><?php echo $category->id; ?></td>
						<td><?php echo $category->title; ?></td>
            <td><?php echo $category->summary; ?></td>

						<td>
              <form action="<?php echo ROUTE_URL.'/Category/edit/'; ?>" method="POST">
                <input type="hidden" name="category_id" value="<?php echo $category->id; ?>">
  							<button type="submit" class="btn btn-primary btn-sm">Editar</button>
              </form>
              <form action="<?php echo ROUTE_URL.'/Category/delete/'; ?>" method="POST">
                <input type="hidden" name="category_id" value="<?php echo $category->id; ?>">
  							<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </form>
						</td>

					</tr>
        <?php endforeach ?>

			</table>
			</div>
  </div>
</div>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
