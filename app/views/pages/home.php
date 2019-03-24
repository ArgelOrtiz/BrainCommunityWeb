<?php  require ROUTE_APP.'/views/inc/homeheader.php';?>

<div class="mainContainer" >

  <img id="banner" src="<?php echo ROUTE_URL;?>/resource/ejemplo1.jpg" alt="">

  <div class="categoryDiv">
    <a href="#" class="active">Categorias</a>
      <?php foreach($data['posts'] as $post): ?>
        <a href="#"><?php echo $post->title; ?></a>
      <?php endforeach ?>

  </div>

</div>

  </body>

<?php  require ROUTE_APP.'/views/inc/footer.php';?>
