<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pl">
   <head>
      <meta charset="utf-8">
      <title>Rejestracja</title>
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
                     <h1 class="h2">Zakładasz konto</h1>
                     <p class="lead">Zacznij działać</p>
                      <?php 
                      if(!empty($this->session->flashdata('register_error'))) :
                      ?>
                        <div class="alert alert-danger" role="alert">
                          <?php echo $this->session->flashdata('register_error'); ?>
                        </div>
                      <?php endif; ?>
                     <form method="post" action="<?php echo base_url('register'); ?>">
                     <div class="form-group">
                           <input class="form-control" type="text" placeholder="Imię" name="name" required/>
                        </div>
                        <div class="form-group">
                           <input class="form-control" type="text" placeholder="Nazwa Użytkownika" name="username" required/>
                        </div>
                        <div class="form-group">
                           <input class="form-control" type="email" placeholder="E-Mail" name="email" required/>
                        </div>
                        <div class="form-group">
                           <input class="form-control" type="password" placeholder="Hasło" name="password" required/>
                        </div>
                        <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">Zarejestruj się</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>