<?php
  $vacancyDetailsUrl = "/vacancy.php?id={$vacancy->id}";
  $deleteVacancyActionUrl = "/actions/delete-vacancy.php?id={$vacancy->id}";
?>

<?php 
  echo "
    <a class='item item_hoverable _border_sub' href=$vacancyDetailsUrl >
      <h3 class='item__title'>{$vacancy->title}</h3>
      <span>{$vacancy->company}</span>
      <span>{$vacancy->city}</span>
      <span>{$vacancy->employment}</span>
      <span>Опыт работы:
  ";
?>

<?php 
  if ($vacancy->experience_from) {
    echo "от $vacancy->experience_from ";
  }
  if ($vacancy->experience_to) {
    echo "до $vacancy->experience_to";
  }
  if (!$vacancy->experience_from && !$vacancy->experience_to) {
    echo " не указано";
  }
  echo "</span> <span>Оклад:";
  if ($vacancy->salary_from) {
    echo "от $vacancy->salary_from ";
  }
  if ($vacancy->salary_to) {
    echo "до $vacancy->salary_to";
  }
  if (!$vacancy->salary_from && !$vacancy->salary_to) {
    echo " не указано";
  }
  echo "</span>";
?>

<div class="item__buttons">
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