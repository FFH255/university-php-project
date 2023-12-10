<div class='item'>
  <?php 
    echo "
      <h2 class='item__title'>{$vacancy->title}</h2>
      <span>{$vacancy->company}</span>
      <span>{$vacancy->city}</span>
      <span>{$vacancy->employment}</span>
      <span>от {$vacancy->experience_from} до {$vacancy->experience_to}</span>
      <span>от {$vacancy->salary_from} до {$vacancy->salary_to}</span>
      <span>{$vacancy->description}</span>
      <div class='item__buttons'>
    ";
    include $ROOT . '/ui/replyVacancyButton.php';
    include $ROOT . '/ui/editVacancyButton.php';
    include $ROOT . '/ui/deleteVacancyButton.php';
  ?>
  </div>
</div>
