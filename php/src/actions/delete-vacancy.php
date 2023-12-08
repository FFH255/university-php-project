<?php 
  $id = $_POST['id'] ?? null;
  if(!$id) {
    die();
  }

  require_once $_SERVER["DOCUMENT_ROOT"] . '/init.php';
  require_once  $ROOT . '/lib/VacanciesService.php';
  
  $vacanciesService = new VacanciesService();
  $result = $vacanciesService->deleteVacancy($id);

  include_once $ROOT . '/lib/utils/redirect.php';

  redirect('/');
?>