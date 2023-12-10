<?php
  $vacancyDetailsUrl = "/vacancy.php?id={$vacancy->id}";
  $deleteVacancyActionUrl = "/actions/delete-vacancy.php?id={$vacancy->id}";
?>

<?php 
  echo "
    <a class='vacancy vacancy_hoverable vacancy_bordered' href=$vacancyDetailsUrl >
      <h3 class='vacancy__title'>{$vacancy->title}</h3>
      <span>{$vacancy->company}</span>
      <span>{$vacancy->city}</span>
      <span>{$vacancy->employment}</span>
      <span>Опыт работы: от {$vacancy->experience_from} до {$vacancy->experience_to}</span>
      <span>Оклад: от {$vacancy->salary_from} до {$vacancy->salary_to}</span>
  ";
?>

<div class="vacancy__buttons">
  <?php 
    include $ROOT . '/ui/replyVacancyButton.php';
    include $ROOT . '/ui/editVacancyButton.php';
    include $ROOT . '/ui/deleteVacancyButton.php';
  ?>
</div>

<?php  
  if ($vacancy->replies > 0) {
    echo "<span>Вы уже откликнулись на эту вакансию</span>";
  }

  echo "</a>";
?>