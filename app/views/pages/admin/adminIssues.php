<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<div class="admin-content">

  <div class="title-content">
    <h3>Reporte</h3>
  </div>
  <div class="row-content">
			<h4>Lista de reportes</h4>
			<hr/>

			<table id="issue_table" class="table table-hover">
        <thead>
				<tr>
          <th>Id</th>
					<th>Título</th>
					<th>Fecha</th>
					<th>Acciones</th>
				</tr>
        </thead>
        <tbody>
        <?php foreach($data['issues'] as $issue): ?>
          <tr>
						<td><?php echo $issue->id; ?></td>
						<td><?php echo $issue->title; ?></td>
            <td><?php echo $issue->report_date; ?></td>
						<td>
              <input id="clickMe" id="Editar" class="btn btn-primary btn-sm" type="button" value="Editar" onclick="editModal(<?php echo $issue->id; ?>);" />
              <?php if($issue->status == 1): ?>
              <form action="<?php echo ROUTE_URL.'/Issue/delete/'; ?>" method="POST">
                <input type="hidden" name="issue_id" value="<?php echo $issue->id; ?>">
                <button type="submit" class="btn btn-danger btn-sm">Deshabilitar</button>
              </form>
              <?php endif; ?>
						</td>
					</tr>
        <?php endforeach ?>
      </tbody>
			</table>
</div>

<!--Edit modal-->
<?php foreach($data['issues'] as $issue): ?>
<div id="myModal<?php echo $issue->id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h4>Editar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?php echo ROUTE_URL.'/Issue/edit/'; ?>" method="POST">
        <input type="hidden" name="issue_id" value="<?php echo $issue->id; ?>">
        <label>Título</label><br>
        <input style="width:100%" type="text" name="title" id="title" class="form_control" value="<?php echo $issue->title; ?>"><br>
        <label>Descripcion</label><br>
        <input style="width:100%" type="text" name="summary" id="summary" class="form_control" value="<?php echo $issue->summary; ?>"><br>
        <label>Estatus</label><br>
        <input type="radio" name="status" id="status" value="1">Atendido<br>
        <input type="radio" name="status" id="status" value="0">Por atender<br>
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
    $('#issue_table').DataTable();
  } );

  function createModal(){
    $("#create_modal").modal();
  }

  function editModal(id){
    $("#myModal" + id).modal();
  }

</script>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
