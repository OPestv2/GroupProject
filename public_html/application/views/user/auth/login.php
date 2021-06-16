<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pl">
   <head>
      <meta charset="utf-8">
      <title>Zaloguj się do swojego konta Books</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="<?php echo base_url('assets/img/favicon.ico'); ?>" rel="icon" type="image/x-icon">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
      <link href="<?php echo base_url('assets/css/theme.css'); ?>" rel="stylesheet" type="text/css" media="all" />
   </head>
   <body>
      <div class="main-container fullscreen">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-5 col-lg-6 col-md-7">
                  <div class="text-center">
                     <h1 class="h2">Witamy &#x1f44b;</h1>
                     <p class="lead">Zaloguj się do swojego konta, aby kontynuować</p>
                      <?php 
                      if(!empty($this->session->flashdata('login_error'))) :
                      ?>
                        <div class="alert alert-danger" role="alert">
                          <?php echo $this->session->flashdata('login_error'); ?>
                        </div>
                      <?php endif; ?>
                     <form method="post" action="<?php echo base_url('login'); ?>">
                        <div class="form-group">
                           <input class="form-control" type="email" placeholder="E-Mail" name="email" required autofocus/>
                        </div>
                        <div class="form-group">
                           <input class="form-control" type="password" placeholder="Hasło" name="password" required/>
                        </div>
                        <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">Zaloguj się</button>
                        <small>Nie masz jeszcze konta? <a href="<?php echo base_url('register'); ?>">Załóż konto</a></small>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>