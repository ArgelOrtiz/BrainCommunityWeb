<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="id=edge"/>

    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/general.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/home.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title><?php echo NAME_SITE; ?></title>
  </head>
  <body>
    <div class="HomeHeader">

      <img class="logoBrain" src="<?php echo ROUTE_URL;?>/resource/brain_logo_blue.png" alt="Brain Community">

      <form id="search" class="search" action="<?php echo ROUTE_URL.'/Home/search'?>" onsubmit="return search()">
        <input id="searchInput" type="text" placeholder="Search.." name="searchInput">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
      <?php session_start(); ?>

      <?php if ($_SESSION){ ?>

        <div class="icon-bar">
        <a href="<?php echo ROUTE_URL.'/Profile';?>"><i class="fa fa fa-user"></i></a>

        <?php if ($_SESSION['role'] == 0){ ?>
        <a href="#"> <i class="	fa fa-suitcase"></i> </a>
      <?php }?>

        <a href="<?php echo ROUTE_URL.'/Post'?>"><i class="fa fa-file-o"></i></a>
        <a href="#"><i class="fa fa-file-text"></i></a>
        <a href="<?php echo ROUTE_URL.'/Login/logout'?>"><i class="fa fa-sign-out"></i></a>
      </div>

      <?php }else{ ?>

        <a href="<?php echo ROUTE_URL.'/Login';?>">
          <button class="loginButton" type="button" name="button" onclick="">Login</button>
        </a>

      <?php } ?>



    </div>
