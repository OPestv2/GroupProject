<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
          <h1><?php echo $page; ?></h1>
          <div class="row">
            <?php foreach($books as $book) : ?>
            <div class="col-md-4">
              <div class="col-md-12"><img class="img-fluid d-block" src="<?php echo base_url('storage/books/' . $book->{'poster'}); ?>">
                <div class="card-body">
                  <h5 class="card-title"><a href="<?php echo base_url('book/' . $book->{'id'}); ?>"><b><?php echo $book->{'title'}; ?></b></a></h5>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>