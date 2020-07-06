<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	<?php echo '<script type="text/javascript">alert("INFO:  '.$error.'");</script>';?>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

