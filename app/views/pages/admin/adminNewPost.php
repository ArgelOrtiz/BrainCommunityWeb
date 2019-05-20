<?php  require ROUTE_APP.'/views/inc/header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/post.css"/>
<form class="" action="<?php echo ROUTE_URL.'/MyPosts/createPost'?>" method="post">
  <div class="new-post-container">

    <div class="post-container">

      <div class="title-row">
        <label>Nueva publicación</label>
      </div>

      <div class="post-content-row">
        <label>Titulo</label>
        <input class="form-control " type="text" name="title" value="">
      </div>

      <div class="post-content-row">
        <label>Descripcion</label>
        <textarea class="form-control " type="text" name="summary" value=""></textarea>
      </div>

      <div class="post-content-row">
        <label>Etiquetas</label>
        <div class="metadata-content-row">
          <?php foreach ($data['metadata'] as $metadata): ?>

            <div class="metadata-row" >
              <input class="form-control " type="checkbox" name="metadata[]" value="<?php echo $metadata->id; ?>">
              <label class="form-control "><?php echo $metadata->title; ?></label>
            </div>

          <?php endforeach; ?>
        </div>
      </div>

      <div class="post-content-row" style=" width:25% !important;">
        <input type="hidden" name="id_category" value="<?php echo $data['category']; ?>">
        <button class="btn btn-success" type="submit" name="button">Crear</button>
      </div>


    </div>

  </div>
</form>
