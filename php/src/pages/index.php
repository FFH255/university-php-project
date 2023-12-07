<?php 
  require_once $_SERVER["DOCUMENT_ROOT"] . '/lib/VacanciesService.php';
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
<a href="/create-vacancy.php">Создать вакансию</a>