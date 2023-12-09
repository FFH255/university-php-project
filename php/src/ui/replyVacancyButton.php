<?php 
  $disabled = $vacancy->replies > 0 ? 'disabled' : null;
?>

<form method="get" action="/actions/reply-vacancy.php" class="reply-vacancy-form">
  <input type="hidden" name="vacancyId" value="<?php echo $vacancy->id; ?>" />
  <input type="submit" value="Откликнуться" <?php echo $disabled; ?> />
</form>