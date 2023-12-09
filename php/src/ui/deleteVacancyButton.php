<form method='post' action='/actions/delete-vacancy.php' class="delete-vacancy-form">
  <input name='id' type='hidden' value="<?php echo $vacancy->id; ?>" />
  <input value='Удалить' type='submit'/>
</form>