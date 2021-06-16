<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
<h1>Ustawienia</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                <?php if(!empty($this->session->flashdata('password_error'))) : ?>
                <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('password_error'); ?></div>
                <?php endif; ?>
                <?php if(!empty($this->session->flashdata('password_success'))) : ?>
                <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('password_success'); ?></div>
                <?php endif; ?>
                  <form action="<?php echo base_url('profile/change_password'); ?>" method="post">
                    <div class="form-group"> 
                        <label>Zmień hasło<br></label> 
                        <input type="password" name="old" class="form-control" placeholder="Stare hasło" required> 
                        <small class="form-text text-muted">Wprowadź stare hasło</small> 
                    </div>
                    <div class="form-group"> 
                        <input type="password" name="new" class="form-control" placeholder="Nowe hasło" required> 
                        <small class="form-text text-muted">Wprowadź nowe hasło<br></small>
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirm" class="form-control" placeholder="Powtórz nowe hasło" required> 
                        <small class="form-text text-muted">Powtórz nowe hasło<br></small> 
                    </div>
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                  </form>
                </div>
                <div class="col-md-4">
                <?php if(!empty($this->session->flashdata('email_error'))) : ?>
                <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('email_error'); ?></div>
                <?php endif; ?>
                <?php if(!empty($this->session->flashdata('email_success'))) : ?>
                <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('email_success'); ?></div>
                <?php endif; ?>
                  <form action="<?php echo base_url('profile/change_email'); ?>" method="post">
                    <div class="form-group"> 
                        <label>E-Mail address</label> 
                        <input type="email" name="email" class="form-control" placeholder="Nowy adres E-Mail" required> 
                        <small class="form-text text-muted">Wprowadź nowy adres E-Mail<br></small> 
                    </div>
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                  </form>
                </div>
                <div class="col-md-4">
                <?php if(!empty($this->session->flashdata('username_error'))) : ?>
                <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('username_error'); ?></div>
                <?php endif; ?>
                <?php if(!empty($this->session->flashdata('username_success'))) : ?>
                <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('username_success'); ?></div>
                <?php endif; ?>
                  <form action="<?php echo base_url('profile/change_username'); ?>" method="post">
                    <div class="form-group"> 
                        <label>Zmień nickname</label> 
                        <input type="text" name="username" class="form-control" placeholder="Nickname" required> 
                        <small class="form-text text-muted">Wprowadź nowy nickname<br></small> 
                    </div>
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
</div>