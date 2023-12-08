<?php 
  require_once $_SERVER["DOCUMENT_ROOT"] . '/bootstrap.php';

  $id = $_POST['id'] ?? null;
  if(!$id) {
    die();
  }

  $vacanciesService = new VacanciesService();
  $result = $vacanciesService->deleteVacancy($id);

  redirect('/');
?>