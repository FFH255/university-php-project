<?php 
  $vacancyId = $_GET['vacancyId'] ?? null;
  if (!$vacancyId) {
    die();
  }

  require_once $_SERVER["DOCUMENT_ROOT"] . '/bootstrap.php';
  require_once  $ROOT . '/lib/VacanciesService.php';

  $vacanciesService = new VacanciesService();
  $result = $vacanciesService->replayVacancy($vacancyId);

  include_once $ROOT . '/lib/utils/redirect.php';

  redirect('/');
?>