<?php  require ROUTE_APP.'/views/inc/admin/sidebar.php';?>
<div class="admin-content">
  <?php
    $username = $data['users'];
    echo $username->id;
  ?>
</div>
<?php  require ROUTE_APP.'/views/inc/admin/footer.php';?>
