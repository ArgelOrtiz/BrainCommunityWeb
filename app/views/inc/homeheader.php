<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="id=edge"/>


    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/home.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/home(change screen).css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>

    <title><?php echo NAME_SITE; ?></title>
  </head>
  <body>
     <?php session_start(); ?>

    <img src="<?php echo ROUTE_URL; ?>/resource/banner.png" alt="Info Banner" style="position:relative; width:100%; height:auto;">

    <nav class="navbar navbar-inverse" id="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><?php echo NAME_SITE; ?></a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a class="fa fa-home" href="" title="Home"></a></li>

          <?php if ($_SESSION){ ?>

            <li ><a class="fa fa-user-circle-o" href="<?php echo ROUTE_URL.'/Profile';?>" title="Perfil"></a></li>

          <?php if ($_SESSION['role'] == 0){ ?>

            <li ><a class="fa fa-building-o" href="<?php echo ROUTE_URL.'/AdminHome';?>" title="Panel"></a></li>

          <?php }?>

            <li ><a class="fa fa-folder-o" href="<?php echo ROUTE_URL.'/MyPosts'?>" title="Mis post"></a></li>
            <li ><a class="fa fa-file-text-o" href="#" title="Nuevo post"></a></li>
            <li ><a  class="fa fa-sign-out" href="<?php echo ROUTE_URL.'/Login/logout'?>" title="Cerrar sesión"></a></li>


          <?php }else{ ?>

          <li><a class="fa fa-sign-in" href="" data-toggle="modal" data-target="#myModal" title="Login"></a></li>

          <?php } ?>

        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </nav>
