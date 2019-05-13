<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<div class="admin-content">

  <div class="title-content">
    <h3>Posts</h3>
  </div>

  <div class="row-content">
			<h4>Lista de posts</h4>
			<hr/>

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
  							<button type="submit" class="btn btn-primary btn-sm">Editar</button>
              </form>
              <form action="<?php echo ROUTE_URL.'/Post/delete/'; ?>" method="POST">
                <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
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
