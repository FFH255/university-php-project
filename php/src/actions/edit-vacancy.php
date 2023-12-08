<?php 
  $keys = [
    'id',
    'title', 
    'company', 
    'employment', 
    'experience_from', 
    'experience_to', 
    'city', 
    'salary_from', 
    'salary_to', 
    'description'
  ];

  foreach ($keys as $key) {
    $param = $_POST[$key];
    $$key = ($param !== '' && isset($param)) ? $param : null;
  }

  if (!$title || !$employment || !$description) {
    die();
  }

  require_once $_SERVER["DOCUMENT_ROOT"] . '/init.php';
  require_once  $ROOT . '/lib/VacanciesService.php';

  $vacanciesService = new VacanciesService();
  $result = $vacanciesService->editVacancy($id, $title, $company, $employment, $experience_from, $experience_to, $city, $salary_from, $salary_to, $description);
  redirect('/');
?>