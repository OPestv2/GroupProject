<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
    <?php if(!empty($this->session->flashdata('add_error'))) : ?>
    <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('add_error'); ?></div>
    <?php endif; ?>
    <h1><?php echo $page; ?></h1>
          <form method="post" enctype="multipart/form-data" action="<?php echo base_url('home/add_book_action'); ?>">
            <div class="form-group">
                <label for="title">Tytul</label> 
                <input type="text" class="form-control" name="title" id="title" placeholder="Wprowadź tytul książki" require> 
            </div>
            <div class="form-group">
                <label for="author">Autor</label>
                <input type="text" class="form-control" name="author" id="author" placeholder="Autor" require> 
            </div> 
            <div class="form-group">
                <label for="genre">Typ utworu</label>
                <input type="text" class="form-control" name="genre" id="genre" placeholder="Typ utworu" require> 
            </div> 
            <div class="form-group">
                <label for="poster">Okładka</label>
                <input type="file" class="form-control-file" name="poster" id="poster" placeholder="Okładka" accept="image/x-png,image/gif,image/jpeg" require> 
            </div> 
            <div class="form-group">
                <label for="poster">Plik PDF</label>
                <input type="file" class="form-control-file" name="pdf" id="pdf" placeholder="Plik PDF" accept="application/pdf" require> 
            </div> 
            <div class="form-group">
                <label for="description">Opis</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div> 
            <button type="submit" class="btn btn-primary">Dodaj</button>
          </form>
        </div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace('description');
</script>