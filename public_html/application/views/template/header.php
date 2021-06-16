<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo $page; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/theme.css'); ?>" type="text/css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="<?php echo base_url(); ?>">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b> Book4U</b>
        </a>
        <ul class="navbar-nav mx-auto"><form class="form-inline" action="<?php echo base_url('search/results'); ?>" method="post">
          <div class="input-group"><input type="text" class="form-control" name="search" placeholder="Wyszukaj">
          <div class="input-group-append"><button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button></div>
          </div>
          </form></ul>
        <ul class="navbar-nav">
        <?php if($this->user_model->checkAuthStatus() === false) : ?>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('login'); ?>">Zaloguj się</a> </li>
          <li class="nav-item"> <a class="nav-link text-primary" href="<?php echo base_url('register'); ?>">Załóż konto</a> </li>
        <?php else : ?>
          <li class="nav-item"> <a class="nav-link">Witaj, <?php echo $this->session->userdata('displayname'); ?></a> </li>
          <li class="nav-item"> <a class="nav-link text-primary" href="<?php echo base_url('logout'); ?>">Wyloguj się</a> </li>
        <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="fixed">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center border"><a href="<?php echo base_url(); ?>"> Strona główna</a> <i class="fa fa-home text-muted fa-lg"></i></li>
              <li class="list-group-item d-flex justify-content-between align-items-center border"><a href="<?php echo base_url('popular'); ?>"> Popularne</a> <i class="fa fa-fire text-muted fa-lg"></i></li>
              <?php if($this->user_model->checkAuthStatus()) : ?>
              <li class="list-group-item d-flex justify-content-between align-items-center border"><a href="<?php echo base_url('profile/books'); ?>"> Moje Książki</a> <i class="fa fa-book text-muted fa-lg"></i></li>
              <li class="list-group-item d-flex justify-content-between align-items-center border"><a href="<?php echo base_url('add_book'); ?>"> Dodaj Książkę</a> <i class="fa fa-plus text-muted fa-lg"></i></li>
              <li class="list-group-item d-flex justify-content-between align-items-center border"><a href="<?php echo base_url('profile/settings'); ?>"> Ustawienia</a> <i class="fa fa-cog text-muted fa-lg"></i></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>