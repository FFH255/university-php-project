<?php 
  require_once $_SERVER["DOCUMENT_ROOT"] . '/bootstrap.php';

  $vacancyId = $_GET['vacancyId'] ?? null;
  if (!$vacancyId) {
    die();
  }

  $vacanciesService = new VacanciesService();
  $result = $vacanciesService->replyVacancy($vacancyId);

  redirect('/');
?>