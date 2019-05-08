<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<!-- Our Custom CSS -->
<link rel="stylesheet" href="style.css">

<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<title>Brain Community</title>

		<style>
		body {
		    background: #f1f1f1;
		}

		p {
		    font-size: 1.1em;
		    font-weight: 300;
		    line-height: 1.7em;
		    color: #999;
		}

		a, a:hover, a:focus {
		    color: inherit;
		    text-decoration: none;
		    transition: all 0.3s;
		}

		#sidebar {
		    /* don't forget to add all the previously mentioned styles here too */
		    background: #7386D5;
		    color: #fff;
		    transition: all 0.3s;
		}

		#sidebar .sidebar-header {
		    padding: 20px;
		    background: #6d7fcc;
		}

		#sidebar ul.components {
		    padding: 20px 0;
		    border-bottom: 1px solid #47748b;
		}

		#sidebar ul p {
		    color: #fff;
		    padding: 10px;
		}

		#sidebar ul li a {
		    padding: 10px;
		    font-size: 1.1em;
		    display: block;
		}
		#sidebar ul li a:hover {
		    color: #7386D5;
		    background: #fff;
		}

		#sidebar ul li.active > a, a[aria-expanded="true"] {
		    color: #fff;
		    background: #6d7fcc;
		}

		ul ul a {
		    font-size: 0.9em !important;
		    padding-left: 30px !important;
		    background: #6d7fcc;
		}

		.wrapper {
		    display: flex;
		    width: 100%;
		    align-items: stretch;
		}

		#sidebar {
		    min-width: 250px;
		    max-width: 250px;
				min-height: 100vh;
		}

		#sidebar.active {
		    margin-left: -250px;
		}

		a[data-toggle="collapse"] {
		    position: relative;
		}

		.dropdown-toggle::after {
		    display: block;
		    position: absolute;
		    top: 55%;
		    right: 20px;
		    transform: translateY(-50%);
		}

		@media (max-width: 768px) {
		    #sidebar {
		        margin-left: -250px;
		    }
		    #sidebar.active {
		        margin-left: 0;
		    }
		}
		</style>

	</head>
	<body>
		<div class="wrapper">
			<!-- Sidebar -->
	    <nav id="sidebar">
				 <div class="sidebar-header">
            <h3>Panel Administrativo</h3>
        </div>

				<ul class="list-unstyled components">
            <!-- <p>Dummy Heading</p> -->
						<li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Usuarios</a>
            </li>
						<li>
								<a href="#">Categorías</a>
						</li>
						<li>
								<a href="#">Preguntas</a>
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

			<div id="content">

		    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		        <div class="container-fluid">

		            <button type="button" id="sidebarCollapse" class="btn btn-info">
		                <i class="fas fa-align-left"></i>
		                <span>Cerrar Menú</span>
		            </button>
		        </div>
		    </nav>
			</div>

		</div>

		<script>
			$(document).ready(function () {

						$('#sidebarCollapse').on('click', function () {
		        // open or close navbar
		        $('#sidebar').toggleClass('active');
		        // close dropdowns
		        $('.collapse.in').toggleClass('in');
		        // and also adjust aria-expanded attributes we use for the open/closed arrows
		        // in our CSS
		        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
		    });

			});
		</script>

		<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
