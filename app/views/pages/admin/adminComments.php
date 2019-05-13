<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<div class="admin-content">

  <div class="title-content">
    <h3>Comentarios</h3>
  </div>

  <div class="row-content">
			<h4>Lista de comentarios</h4>
			<hr/>

			<div class="table-responsive">
			<table class="table table-striped table-hover">
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
  							<button type="submit" class="btn btn-primary btn-sm">Editar</button>
              </form>
              <form action="<?php echo ROUTE_URL.'/Comment/delete/'; ?>" method="POST">
                <input type="hidden" name="comment_id" value="<?php echo $comment->id; ?>">
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
