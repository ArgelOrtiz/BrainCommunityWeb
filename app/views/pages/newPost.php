<?php  require ROUTE_APP.'/views/inc/header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/post.css"/>

<!-- <style media="screen">
.new-post-container{
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top:80px;
  left:0px;
  width: 100%;
  height: auto;
}

.post-container{
  display:flex;
  flex-direction: column;
  background: #eee;
  height:auto;
  width:60%;
  margin-top: 5%;
  margin-bottom: 5%;
  border-radius:15px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.title-row{
  display:flex;
  flex-direction: column;
  justify-content: center;
  margin-bottom: 25px;
  padding-left: 25px;
}

.title-row > label{
  font-size:25px;
}

.title-row > label + label {
  font-size:15px;
}

.post-content-row{
  display:flex;
  flex-direction: column;
  padding-left: 35px;
  padding-right: 35px;
  margin-bottom: 15px;
}

.metadata-content-row{
  display:flex;
  background: white;
  flex-direction: row;
  flex-wrap: wrap;
  margin-bottom: 15px;
}

.metadata-row{
  margin: 15px;
}

</style> -->


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
      <textarea class="form-control " type="text" name="title" value=""></textarea>
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
      <button class="btn btn-success" type="submit" name="button">Crear</button>
    </div>


  </div>

</div>
