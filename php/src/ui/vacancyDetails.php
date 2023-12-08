<div class='vacancy'>
  <?php 
    echo "
      <h2>{$vacancy->title}</h2>
      <span>{$vacancy->company}</span>
      <span>{$vacancy->city}</span>
      <span>{$vacancy->employment}</span>
      <span>от {$vacancy->experience_from} до {$vacancy->experience_to}</span>
      <span>от {$vacancy->salary_from} до {$vacancy->salary_to}</span>
      <span>{$vacancy->description}</span>
    ";
    include_once $ROOT . '/ui/replayVacancyButton.php';
  ?>
</div>
