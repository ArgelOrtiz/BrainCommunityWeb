<?php  require ROUTE_APP.'/views/inc/header.php';?>
<div class="new-post-container" style="position:absolute; display: flex; top:80px; left:0px; background:red; width:100%; height:calc(100% - 80px); margin:0px; padding:0px; flex-direction:column; justify-content: center; align-items: center;">

  <div class="post-container" style="background: green; display:flex; flex-direction:column; height:auto; width:80%; padding-left:10px; padding-right:10px;">

    <div class="title-row" style="background: yellow; margin-bottom:15px; flex-direction:column; justify-content: center; align-items: center;">
      <label>Nueva publicación</label>
    </div>

    <div class="post-content-row" style="background:blue; display:flex; flex-direction:column;">
      <label>Titulo</label>
      <input type="text" name="title" value="">
    </div>

    <div class="post-content-row" style="background:blue; display:flex; flex-direction:column;">
      <label>Descripcion</label>
      <textarea type="text" name="title" value=""></textarea>
    </div>

    <div class="post-content-row" style="background:blue; display:flex; flex-direction:column;">
      <label>Etiquetas</label>
      <?php foreach ($data['metadata'] as $metadata): ?>

      <?php endforeach; ?>
      <input type="checkbox" name="title" value="">
    </div>


  </div>

</div>
