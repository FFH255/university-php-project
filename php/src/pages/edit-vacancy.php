<?php
  $id = $_GET['id'] ?? null;
  if (!$id) {
    redirect('/');
    die();
  }
  $vacanciesService = new VacanciesService();
  $vacancy = $vacanciesService->getVacancyById($id);
?>

<div class="create-vacancy-page">
  <h1>Редактировать вакансию</h2>
  <?php 
    $buttonContent = "Редактировать";
    $actionUrl = "/actions/edit-vacancy.php";
    include_once $ROOT . '/ui/vacancyForm.php';
  ?>
</div>