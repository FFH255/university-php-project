<form method='post' action='/actions/delete-vacancy.php'>
  <input name='id' type='hidden' value="<?php echo $vacancy->id; ?>" />
  <input value='Удалить' type='submit' class="button button_theme_neutral" />
</form>