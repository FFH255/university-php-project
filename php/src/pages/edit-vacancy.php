<?php
  $id = $_GET['id'] ?? null;
  if (!$id) {
    redirect('/');
    die();
  }
  $vacanciesService = new VacanciesService();
  $vacancy = $vacanciesService->getVacancyById($id);

  $title = 'Редактировать вакансию';
  $buttonContent = "Редактировать";
  $actionUrl = "/actions/edit-vacancy.php";
  include_once $ROOT . '/ui/vacancyForm.php';
?>