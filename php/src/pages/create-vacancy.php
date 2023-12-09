<?php 
  $errorMessage = $_GET['errorMessage'] ?? null;
  $title = 'Добавить вакансию';
  $buttonContent = "Добавить";
  $actionUrl = "/actions/create-vacancy.php";
  $vacancy = new VacancyModel();
  include_once $ROOT . '/ui/vacancyForm.php';
?>
