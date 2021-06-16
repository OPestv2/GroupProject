<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
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
          <div class="row">
            <div class="col-md-12">
              <ul class="pagination d-flex align-items-center">
                <?php echo $links; ?>
              </ul>
            </div>
          </div>
        </div>