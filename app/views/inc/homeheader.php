<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="id=edge"/>

    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/general.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo ROUTE_URL; ?>/style/home.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?php echo NAME_SITE; ?></title>
  </head>
  <body>
    <div class="HomeHeader">

      <img class="logoBrain" src="<?php echo ROUTE_URL;?>/resource/brain_logo_blue.png" alt="Brain Community">

      <form id="search" class="search" action="<?php echo ROUTE_URL.'/Home/search'?>" onsubmit="return search()">
        <input id="searchInput" type="text" placeholder="Search.." name="searchInput">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

      <button class="loginButton" type="button" name="button">Login</button>

    </div>
