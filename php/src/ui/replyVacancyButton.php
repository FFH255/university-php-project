<?php 
  $disabled = $vacancy->replies > 0 ? 'disabled' : null;
  $replyActionUrl = "/actions/reply-vacancy.php";
?>

<form method="get" action="<?php echo $replyActionUrl; ?>" >
  <input type="hidden" name="vacancyId" value="<?php echo $vacancy->id; ?>" />
  <input 
    class="button button_theme_positive" 
    type="submit" 
    value="Откликнуться" 
    <?php echo $disabled; ?> 
  />
</form>