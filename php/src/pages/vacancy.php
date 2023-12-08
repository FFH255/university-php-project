<?php 
  $vacanciesService = new VacanciesService();
  $id = $_GET['id'] ?? null;
  if (!$id) {
    echo "<h2>Не удалось загрузить вакансию</h2>";
  } else {
    $vacancy = $vacanciesService->getVacancyById($id);
    include_once $ROOT . '/ui/vacancyDetails.php';
  }
?>