<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-md-8">
<h1><?php echo $book->{'title'}; ?></h1>
<div class="row">
  <div class="col-md-4"><img class="img-fluid d-block" src="<?php echo base_url('storage/books/' . $book->{'poster'}); ?>"></div>
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><b>Autor: </b> <?php echo $book->{'author'}; ?></h5>
        <h5 class="card-title"><b>Typ utworu: </b> <?php echo $book->{'genre'}; ?></h5>
        <p class="card-text"><?php echo $book->{'description'}; ?></p>
        <?php if($this->user_model->checkAuthStatus() === true) : ?>
        <a href="<?php echo ($fav_status == 0) ? base_url('home/favorite/' . $book->{'id'} . '/1') : base_url('home/favorite/' . $book->{'id'} . '/0'); ?>" class="card-link"><?php echo ($fav_status == 0) ? 'Dodaj do ulubionych' : 'Usuń z ulubionych'; ?></a>
        <a target="_blanc" href="<?php echo base_url('storage/books/' . $book->{'file'}); ?>" class="card-link">Pobierz</a>
        <?php else : ?>
          Żeby pobrać ksiąkę <a href="<?php echo base_url('login'); ?>">zaloguj się</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<br>
<h2>Komentarze <?php echo (count($comments) > 0) ? '(' . count($comments) . ')' : ''; ?> <?php if($this->user_model->checkAuthStatus() === true) : ?><small class="text-muted"><a onclick="addComment();" href="javascript:void(0);">Dodaj komentarz</a></small><?php endif; ?></h2>
<?php echo (count($comments) == 0) ? '<br>' : ''; ?> 
<div class="row">
<div class="col-md-12">
              <?php foreach($comments as $comment) : ?>
                <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><b><?php echo $comment->{'username'} ?></b></h5>
                  <h6 class="card-subtitle my-2 text-muted"><?php echo $comment->{'created_at'} ?></h6>
                  <p class="card-text"><?php echo $comment->{'comment'} ?></p>
                </div>
              </div>
              <br>
              <?php endforeach; ?>
            </div>
        
            
</div>

</div>

<?php if($this->user_model->checkAuthStatus() === true) : ?>
<form class="modal" id="add-comment-modal" method="post" action="<?php echo base_url('home/add_comment/' . $book->{'id'}); ?>">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Dodawanie komentarza</h5> <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
        </div>
        <div class="modal-body">
        <div class="form-group">
                <label for="comment">Komentarz</label>
                <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
            </div> 
        </div>
        <div class="modal-footer"> <button type="submit" class="btn btn-primary">Dodaj</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button> </div>
      </div>
    </div>
  </form>

  <script>
      function addComment() {
        $('#add-comment-modal').modal({show:true});
      }
  </script>
  <?php endif; ?>