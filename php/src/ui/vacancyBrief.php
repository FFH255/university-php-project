<?php
  $vacancyDetailsUrl = "/vacancy.php?id={$vacancy->id}";
  $deleteVacancyActionUrl = "/actions/delete-vacancy.php?id={$vacancy->id}";
?>

<?php 
  echo "
    <a href=$vacancyDetailsUrl >
      <h3>{$vacancy->title}</h3>
      <span>{$vacancy->company}</span>
      <span>{$vacancy->city}</span>
      <span>{$vacancy->employment}</span>
      <span>от {$vacancy->experience_from} до {$vacancy->experience_to}</span>
      <span>от {$vacancy->salary_from} до {$vacancy->salary_to}</span>
  ";
  include $ROOT . '/ui/deleteVacancyButton.php';
  include $ROOT . '/ui/editVacancyButton.php';
  include $ROOT . '/ui/replyVacancyButton.php';
  
  if ($vacancy->replies > 0) {
    echo "<span>Вы уже откликнулись на эту вакансию</span>";
  }

  echo "</a>";
?>