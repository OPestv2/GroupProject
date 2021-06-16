<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
    <?php if(!empty($this->session->flashdata('ticket_success'))) : ?>
    <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('ticket_success'); ?></div>
    <?php endif; ?>
    <h1><?php echo $page; ?></h1>
          <form method="post" enctype="multipart/form-data" action="<?php echo base_url('tickets/add'); ?>">
            <div class="form-group">
                <label for="subject">Tytul</label> 
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Wprowadź tytul zgłoszenia" required> 
            </div>
            <div class="form-group">
                <label for="ticket">Zgłoszenie</label>
                <textarea class="form-control" name="ticket" id="ticket" rows="5" placeholder="Tekst zgłoszenia" required></textarea>
            </div> 
            <button type="submit" class="btn btn-primary">Dodaj</button>
          </form>
        </div>