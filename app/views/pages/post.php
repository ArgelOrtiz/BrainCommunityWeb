<?php  require ROUTE_APP.'/views/inc/header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/post.css"/>

<?php
if ($data['post']) {
	// code...
	$post = $data['post'];
}

if ($data['user']) {
	// code...
	$user = $data['user'];
}

if ($data['category']) {
	// code...
	$category = $data['category'];
}


 ?>

<div class="info-main-container" >
	<div class="info-container">

						<label class="titles" for="">Nombre de usuario:</label>
						<label for=""><?php echo $user->username; ?></label>
						<label class="titles" for="">Puntos:</label>
						<label for=""><?php echo $user->points; ?></label>
						<br> <br>
						<label class="titles" for="">Categoria:</label>
						<label for=""><?php echo $category->title; ?></label>
						<label class="titles" for="">Fecha:</label>
						<label for=""><?php echo $post->create_date; ?></label>
						<label class="titles" for="">Comentarios:</label>
						<label for=""><?php echo $post->comments; ?></label>
						<label class="titles" for="">Visitas:</label>
						<label for=""><?php echo $post->visits; ?></label>

	</div>
</div>

<div class="post-main-container">
		<div class="post-container">

			<div class="title-row">
				<label for="title"><?php echo $post->title;  ?></label>
			</div>

			<div class="post-content-row">
				<p><?php echo $post->summary; ?></p>

			</div>

			<div class="post-coments-row" style="  padding-left:15px; padding-right:15px;">

				<?php if ($data['comments']): ?>
					<?php foreach ($data['comments'] as $comments): ?>
						<div class="comments-row" style=" background:lightgrey; margin:15px; border-left: 6px #00BFFF solid; display:flex; flex-direction:column; padding:5px;">

							<div class="title-comments" style="width: 100%;display:flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between;">
								<label for="">_username_</label>
								<label for=""><?php echo $comments->create_date; ?></label>
							</div>

							<div class="content-comments">
								<p><?php echo $comments->summary; ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

			</div>

		</div>

		<form class="post-container">

			<div class="title-row">
				<label for="title">Escribir un comentario</label>
			</div>

			<div class="post-content-row">
				<textarea name="name" rows="8" cols="80"></textarea>
			</div>

			<div class="post-content-row">
				<button class="btn btn-primary" type="submit" name="button" style="width:35%;">Comentar</button>
			</div>

		</form>
</div>


﻿<?php  require ROUTE_APP.'/views/inc/footer.php';?>
