<?php  require ROUTE_APP.'/views/inc/header.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/post.css"/>

<?php
	session_start();

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

						<form class="" action="<?php echo ROUTE_URL.'/Profile/user';?>" method="get">
							<input type="hidden" name="username" value="<?php echo $user->username; ?>">
							<button type="submit" class="btn btn-link" style="padding:0px;"> <?php echo $user->username; ?> </button>
						</form>

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

				<?php if ($data['comments']){ ?>
					<?php foreach ($data['comments'] as $comments): ?>
						<div class="comments-row">

							<div class="title-comments" style="width:100%; display:flex; flex-direction:row; flex-wrap: wrap; justify-content: space-between;">
								<form class=""   action="<?php echo ROUTE_URL.'/Profile/user';?>" method="get">
									<input type="hidden" name="username" value="<?php echo $comments->username; ?>">
									<button type="submit" class="btn btn-link" style="padding:0px;"> <?php echo $comments->username; ?> </button>

								</form>
								<?php if ($_SESSION): ?>
									<?php if ($_SESSION['username'] === $comments->username): ?>
										<form class="" action="<?php echo ROUTE_URL.'/Post/deleteComment';?>" method="post">
											<input type="hidden" name="comment" value="<?php echo $comments->id; ?>">
											<input type="hidden" name="id_post" value="<?php echo $post->id; ?>">
											<button class="btn glyphicon glyphicon-trash btn-outline-danger" type="submit"></button>
										</form>
									<?php endif; ?>
								<?php endif; ?>
								</div>

							<div class="content-comments">
								<p><?php echo $comments->summary; ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				<?php }else { ?>
					<div class="comments-row">

						<div class="message-comments" >
							<label for="">Sin comentarios</label>
						</div>
					</div>
				<?php } ?>

			</div>

		</div>

		<?php if($_SESSION){?>

		<form class="post-container" action="<?php echo ROUTE_URL.'/Post/comment';?>" method="post" onsubmit="return commentario()">

			<div class="title-row">
				<label for="title">Escribir un comentario</label>
			</div>

			<div class="post-content-row">
				<textarea id="comment" name="comment" rows="8" cols="80"></textarea>
			</div>

			<div class="post-content-row">
				<input type="hidden" name="id_post" value="<?php echo $post->id; ?>">
				<button class="btn btn-primary" type="submit" name="button" style="width:125px; display:flex; justify-content: space-between;">Comentar <li class="glyphicon glyphicon-send"></li></button>
			</div>

		</form>

		<?php }else{ ?>

			<div class="post-container">

				<div class="message-comments">
					<label for="">Para comentar debes hacer login primero</label>
				</div>

			</div>
		<?php } ?>
</div>

<script type="text/javascript" src="<?php echo ROUTE_URL?>/js/post.js"></script>

﻿<?php  require ROUTE_APP.'/views/inc/footer.php';?>
