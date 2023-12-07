<?php 
  require_once $_SERVER["DOCUMENT_ROOT"] . '/lib/VacanciesService.php';
  $vacanciesService = new VacanciesService();
  $vacancy = $vacanciesService->getVacancyById(1);
?>

<h2>
  <?php echo $vacancy->title; ?>
</h2>