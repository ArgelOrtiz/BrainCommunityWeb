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

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- DataTable -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

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

						<!-- <li class="x1"><a href="<?php echo ROUTE_URL.'/AdminHome'?>" class="x1"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li> -->
						<li class="x1"><a href="<?php echo ROUTE_URL.'/AdminHome/users'?>" class="x1"><i class="fas fa-users"></i>&nbsp;&nbsp;Usuarios</a></li>
						<li class="x1"><a href="<?php echo ROUTE_URL.'/AdminHome/categories'?>" class="x1"><i class="fas fa-cubes"></i>&nbsp;&nbsp;Categorías</a></li>
						<li class="x1"><a href="<?php echo ROUTE_URL.'/AdminHome/posts'?>" class="x1"><i class="fas fa-archive"></i>&nbsp;&nbsp;Posts</a></li>
						<li class="x1"><a href="<?php echo ROUTE_URL.'/AdminHome/user_issue'?>" class="x1"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Reportes</a></li>
						<br><li class="x1"><a href="<?php echo ROUTE_URL?>" class="x1"><i class="fas fa-undo"></i>&nbsp;&nbsp;Regresar</a></li>
						<!-- <li class="active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Denuncias</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
										<li class="x1"><a href="<?php echo ROUTE_URL.'/AdminHome/user_issue'?>" class="x1"><i class="fas fa-exclamation-triangle"></i>&nbsp;Usuarios</a></li>
                </ul>
            </li> -->
        </ul>

	    </nav>
		<!-- </div> -->
