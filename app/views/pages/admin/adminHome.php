<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Brain Community</title>
			<link rel="stylesheet" type="text/css" href="..\Style\General.css">
		<style media="screen">
.contenido{
	width: 100%;
	height: 100%;
}

.sidebar{
	width: 200px;
	height: 1000px;
  border: 1px;
  padding: 20px;
	border-style: solid;
}
.nav{
	display:flex;
		flex-direction: column;
		justify-content:left;
}
.contenido1{
  border: 1px;
	position:relative;
	float:right;
	display: flex;
	flex-direction: row;
}
.contenido2{
	display:flex;
	flex-direction: column;
  border: 1px solid black;
}
.header{
	width: 1000px;
	height: 100px;
}
.createBox {
	margin:20px;
	width: 200px;
	height: 100px;
	align-content: center;
	border-style: solid;
	border-width: 1px;
	position: relative;
	clear:left
}
.homeContainer{
	display: flex;
	align-items: flex-start;
}
		</style>
	</head>
	<body class="homeContainer">
		<div id="Header">
    </div>
    <div id="RightBanner">
    </div>

		<div class="sidebar"role="navigation">
			<img src="" width="200px" height=150><br>
			<p>Panel de administración</p><br>
						<ul class="nav" id="side-menu">
								<li><a href=""><i class="fa fa-tachometer-alt fa-fw"></i>Home</a></li>
								<li><a href=""><i class="fa fa-clock fa-fw"></i>Publicaciones</a></li>
								<li><a href=""><i class="fa fa-bug fa-fw"></i>Usuarios</a></li>
								<li><a href=""><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesion</a></li>
						</ul>
		</div>

		<div class="contenido">
			<h1 align="center">Home</h1><br>
			<div class="contenido1">
				<div class="createBox">
					<button>Crear Categoría</button>
				</div>
				<div class="createBox">
					<button>Crear Etiqueta</button>
				</div>
				<div class="createBox">
					<button>Crear Post</button>
				</div>
			</div>
		</div>
	</body>
</html>
