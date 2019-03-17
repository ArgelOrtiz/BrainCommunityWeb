<?php  require ROUTE_APP.'/views/inc/homeheader.php';?>

<div class="mainContainer" >

  <div class="categoryDiv">
    <a href="#" class="active">Categorias</a>
      <?php foreach($data['posts'] as $post): ?>
        <a href="#"><?php echo $post->title; ?></a>
      <?php endforeach ?>

  </div>

</div>

<?php  require ROUTE_APP.'/views/inc/footer.php';?>
