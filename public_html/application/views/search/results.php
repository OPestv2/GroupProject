<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
        <h1><?php echo $page; ?></h1>
          <div class="row">
            <?php if(count($books) > 0) : ?>
            <?php foreach($books as $book) : ?>
            <div class="col-md-4">
              <div class="col-md-12"><img class="img-fluid d-block" src="<?php echo base_url('storage/books/' . $book->{'poster'}); ?>">
                <div class="card-body">
                  <h5 class="card-title"><a href="<?php echo base_url('book/' . $book->{'id'}); ?>"><b><?php echo $book->{'title'}; ?></b></a></h5>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <?php else : ?>
                <h1>Nie znaleziono książek dla zapytania: "<?php echo $search; ?>"</h1>
                <br><br><br><br><br><br><br><br><br><br><br>
          </div>
            <?php endif; ?>
          </div>
        </div>