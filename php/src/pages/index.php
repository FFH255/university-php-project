<?php 
  $vacanciesService = new VacanciesService();
  $vacancies = $vacanciesService->getAllVacancies();
?>

<div class='vacancies-list'>
  <?php 
    foreach ($vacancies as $vacancy) {
      include $ROOT . '/ui/vacancyBrief.php';
    }
  ?>
</div>