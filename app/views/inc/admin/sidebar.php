<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="<?php echo ROUTE_URL; ?>/resource/brain_logo.png">
<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<!-- Our Custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/adminhome.css"/>

<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<title>Brain Community</title>
	</head>
	<body>
    <!-- //<div class="wrapper"> -->
			<!-- Sidebar -->
	    <nav class="admin-sidebar" id="sidebar">
				 <div class="sidebar-header">
            <h3>Panel Administrativo</h3>
        </div>

				<ul class="list-unstyled components">
            <!-- <p>Dummy Heading</p> -->
						<li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="<?php echo ROUTE_URL.'/AdminHome/users'?>">Usuarios</a>
            </li>
						<li>
								<a href="#">Categorías</a>
						</li>
						<li>
								<a href="<?php echo ROUTE_URL.'/AdminHome/questions'?>">Preguntas</a>
						</li>
						<li>
								<a href="#">Respuestas</a>
						</li>
            <li class="active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Denuncias</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Usuarios</a>
                    </li>
                    <li>
                        <a href="#">Preguntas</a>
                    </li>
                    <li>
                        <a href="#">Respuestas</a>
                    </li>
                </ul>
            </li>
        </ul>

	    </nav>
		<!-- </div> -->
