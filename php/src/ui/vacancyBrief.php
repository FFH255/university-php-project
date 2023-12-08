<?php
  $deleteVacancyActionUrl = "/actions/delete-vacancy.php?id={$vacancy->id}";
?>

<?php 
  echo "
    <a href='/vacancy.php?id={$vacancy->id}'>
      <h3>{$vacancy->title}</h3>
      <span>{$vacancy->company}</span>
      <span>{$vacancy->city}</span>
      <span>{$vacancy->employment}</span>
      <span>от {$vacancy->experience_from} до {$vacancy->experience_to}</span>
      <span>от {$vacancy->salary_from} до {$vacancy->salary_to}</span>
  ";
?>

<?php
  include $ROOT . '/ui/deleteVacancyButton.php';
?>  

<form method='get' action='/edit-vacancy.php'>
  <input name='id' type="hidden" value="<?php echo $vacancy->id; ?>" />
  <input type='submit' value='Редактировать' />
</form>

<?php 
  echo "</a>";
?>