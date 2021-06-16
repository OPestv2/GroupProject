<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</div>
    </div>
  </div>
  <div class="py-3 border">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex justify-content-between align-items-center">
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>">Strona główna</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('popular'); ?>">Popularne</a></li>
            <?php if($this->user_model->checkAuthStatus()) : ?>
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('profile/settings'); ?>">Ustawienia</a></li>
            <?php endif; ?>
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('about'); ?>">O nas</a></li>
          </ul> 
          <?php if($this->user_model->checkAuthStatus()) : ?><a class="btn btn-primary" href="<?php echo base_url('tickets/new'); ?>">Kontakt</a><?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>
</body>

</html>