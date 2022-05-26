<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assest/css/includes/style.css">
    <link rel="stylesheet" href="../assest/css/home.css">
    <link rel="stylesheet" href="../assest/css/basket.css">
    <link rel="stylesheet" href="../assest/css/all.min.css">
    <title>Gestion De Train</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php url('home'); ?>">
      <img src="../assest/images/logo.svg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
      <?php if(isset($_SESSION['admin_email'])): ?>
          <li class="nav-item">
              <a class="nav-link" href="<?php  url('home'); ?>">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php  url('trips'); ?>">Trips</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php  url('users'); ?>">Users</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php  url('clients'); ?>">Clients</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php  url('bookingUsers'); ?>">Booking users</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php  url('bookingClients'); ?>">Booking Clients</a>
          </li>
      <?php else:?>




        <li class="nav-item">
            <a class="nav-link" href="<?php  url('home'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php  url('booking'); ?>">Booking</a>
        </li>
        <?php if(isset($_SESSION['client_email'])):?>
          <li class="nav-item">
            <a class="nav-link" href="<?php url('profile'); ?>">Profile</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php url('basket'); ?>"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <?php endif;?>
      <?php endif;?>
      </ul>
    
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <?php if(isset($_SESSION['client_email']) || isset($_SESSION['admin_email'])): ?>
          <a class="btn btn-outline-dark" href="<?php url('Log_out'); ?>">Logout</a>
        <?php else: ?>
          <a class="btn btn-outline-dark m-0" href="<?php url('sign_in'); ?>">Sign in</a>
          <a class="btn btn-outline-dark m-0" href="<?php url('sign_up'); ?>">Sign up</a>
        <?php endif;?>
      </ul>
    </div>
  </div>
  </div>
</nav>



<style>
  
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
a img{
    height: 70px;
}
.navbar-nav .btn{
    width: 92px;
    border-radius: 38px;
}
.navbar-nav .btn:hover{
    transform: scale(1.1);
    transition: 0.5s;
}
</style>